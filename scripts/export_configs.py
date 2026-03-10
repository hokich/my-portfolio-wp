#!/usr/bin/env python3

import subprocess
import json
import os
import sys

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


def save_json(path, data):
    """JSON-Daten in Datei speichern."""
    with open(path, "w", encoding="utf-8") as f:
        if isinstance(data, str):
            try:
                parsed = json.loads(data)
                json.dump(parsed, f, indent=2, ensure_ascii=False)
            except json.JSONDecodeError:
                f.write(data)
        else:
            json.dump(data, f, indent=2, ensure_ascii=False)


def export_wp_options():
    print("\nWP-Optionen")

    options = {
        "theme_mods_showfolio": f"{CONFIG_DIR}/theme_mods_showfolio.json",
        "wpcf7":                f"{CONFIG_DIR}/wpcf7.json",
        "active_plugins":       f"{CONFIG_DIR}/active_plugins.json",
    }

    for option_name, filepath in options.items():
        print(f"  Exportiere: {option_name}...")
        data = wp("option", "get", option_name, "--format=json")
        if data:
            save_json(filepath, data)
            print(f"  Gespeichert: {filepath}")
        else:
            print(f"  Warnung: Option '{option_name}' nicht gefunden, wird uebersprungen.")


def export_templates():
    print("\nFSE-Templates")

    raw = wp(
        "post", "list",
        "--post_type=wp_template,wp_template_part",
        "--post_status=publish",
        "--fields=ID,post_name,post_type",
        "--format=json"
    )

    try:
        posts = json.loads(raw)
    except json.JSONDecodeError:
        print("  Fehler: Konnte Template-Liste nicht lesen.")
        return

    for post in posts:
        pid = post["ID"]
        name = post["post_name"]
        ptype = post["post_type"]

        data = wp(
            "post", "get", pid,
            "--fields=post_title,post_name,post_type,post_content,post_status",
            "--format=json"
        )

        filepath = f"{TEMPLATES_DIR}/{ptype}__{name}.json"
        save_json(filepath, data)
        print(f"  Exportiert: {ptype}__{name}.json")


def main():
    print("Export gestartet...")

    # Verzeichnisse erstellen
    for d in [CONFIG_DIR, TEMPLATES_DIR]:
        os.makedirs(d, exist_ok=True)

    export_wp_options()
    export_templates()

    print("\nExport abgeschlossen.")


if __name__ == "__main__":
    main()