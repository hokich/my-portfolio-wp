<?php

function portfolio_register_post_types() {
    register_post_type('project',[
        'labels' => [
            'name'               => 'Projekte',
            'singular_name'      => 'Projekt',
            'add_new'            => 'Neu hinzufügen',
            'add_new_item'       => 'Neues Projekt hinzufügen',
            'edit_item'          => 'Projekt bearbeiten',
            'view_item'          => 'Projekt ansehen',
            'all_items'          => 'Alle Projekte',
            'search_items'       => 'Projekte suchen',
            'not_found'          => 'Keine Projekte gefunden',
        ],
        'public' => true,
        'publicly_queryable' => false,
        'has_archive' => false,
        'show_in_rest' => true,
        'supports'     => ['title', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_icon'    => 'dashicons-portfolio',
        'rewrite'      => ['slug' => 'projekte'],
    ]);

    register_taxonomy('technology', 'project', [
        'labels' => [
            'name'          => 'Technologien',
            'singular_name' => 'Technologie',
            'add_new_item'  => 'Neue Technologie',
            'all_items'     => 'Alle Technologien',
        ],
        'public'            => true,
        'show_in_rest'      => true,
        'hierarchical'      => false,
        'rewrite'           => ['slug' => 'technologie'],
    ]);
}

add_action('init', 'portfolio_register_post_types');

function portfolio_add_meta_boxes() {
    add_meta_box(
        'project_link',
        'Projekt-Link',
        'portfolio_project_link_callback',
        'project',
        'side'
    );
}
add_action('add_meta_boxes', 'portfolio_add_meta_boxes');

function portfolio_project_link_callback($post) {
    $link = get_post_meta($post->ID, '_project_link', true);
    wp_nonce_field('project_link_nonce', 'project_link_nonce');
    ?>
    <label for="project_link">URL:</label>
    <input type="url" id="project_link" name="project_link"
           value="<?php echo esc_attr($link); ?>"
           style="width:100%" placeholder="https://example.com">
    <?php
}

function portfolio_save_meta_boxes($post_id) {
    if (!isset($_POST['project_link_nonce'])) return;
    if (!wp_verify_nonce($_POST['project_link_nonce'], 'project_link_nonce')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['project_link'])) {
        update_post_meta($post_id, '_project_link', esc_url_raw($_POST['project_link']));
    }
}
add_action('save_post', 'portfolio_save_meta_boxes');
