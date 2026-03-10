#!/usr/bin/env python3

import subprocess
import json
import os
import sys
import glob

CONTAINER = "my-portfolio-wordpress"
CONFIG_DIR = "./config/wp-options"
TEMPLATES_DIR = "./config/templates"


def wp(*args):
    """WP-CLI Befehl im Container ausfuehren und Ausgabe zurueckgeben."""
    cmd = ["docker", "compose", "exec", CONTAINER, "wp"] + [str(a) for a in args] + ["--allow-root"]
    result = subprocess.run(cmd, capture_output=True, text=True)
    if result.returncode != 0:
        print(f"  Warnung: {result.stderr.strip()}")
    return result.stdout.strip()


def load_json(path):
    """JSON-Datei laden."""
    with open(path, "r", encoding="utf-8") as f:
        return json.load(f)


def find_post_by_slug(post_type, post_name):
    """Post-ID anhand von post_type und post_name (slug) suchen."""
    result = wp(
        "post", "list",
        f"--post_type={post_type}",
        f"--post_name={post_name}",
        "--field=ID",
        "--format=ids"
    )
    return result.strip() if result.strip() else None


def import_wp_options():
    print("\nWP-Optionen")

    options = {
        "theme_mods_showfolio": f"{CONFIG_DIR}/theme_mods_showfolio.json",
        "wpcf7":                f"{CONFIG_DIR}/wpcf7.json",
        "active_plugins":       f"{CONFIG_DIR}/active_plugins.json",
    }

    for option_name, filepath in options.items():
        if not os.path.exists(filepath):
            print(f"  Uebersprungen: {filepath} nicht gefunden.")
            continue

        data = load_json(filepath)
        wp("option", "update", option_name, json.dumps(data), "--format=json")
        print(f"  Angewendet: {option_name}")


def import_templates():
    print("\nFSE-Templates")

    files = glob.glob(f"{TEMPLATES_DIR}/*.json")
    if not files:
        print("  Keine Template-Dateien gefunden.")
        return

    for filepath in files:
        data = load_json(filepath)
        post_name = data["post_name"]
        post_type = data["post_type"]
        post_title = data["post_title"]
        post_content = data["post_content"]

        existing_id = find_post_by_slug(post_type, post_name)

        if existing_id:
            wp(
                "post", "update", existing_id,
                f"--post_title={post_title}",
                f"--post_content={post_content}",
            )
            print(f"  Aktualisiert: {post_type}__{post_name} (ID {existing_id})")
        else:
            wp(
                "post", "create",
                f"--post_type={post_type}",
                f"--post_name={post_name}",
                f"--post_title={post_title}",
                f"--post_content={post_content}",
                "--post_status=publish",
            )
            print(f"  Erstellt: {post_type}__{post_name}")


def main():
    # Pflichtverzeichnisse pruefen
    for d in [CONFIG_DIR, TEMPLATES_DIR]:
        if not os.path.exists(d):
            print(f"Fehler: Verzeichnis '{d}' nicht gefunden.")
            print("Bitte zuerst export-config.py ausfuehren.")
            sys.exit(1)

    print("Import gestartet...")

    import_wp_options()
    import_templates()

    print("\nImport abgeschlossen.")


if __name__ == "__main__":
    main()