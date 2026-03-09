<?php

function portfolio_projects_shortcode($atts) {
    $atts = shortcode_atts([
        'count' => 4,
    ], $atts);

    $query = new WP_Query([
        'post_type'      => 'project',
        'posts_per_page' => (int) $atts['count'],
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
    ]);

    if (!$query->have_posts()) {
        return '<p>Keine Projekte gefunden.</p>';
    }

    $projects = [];
    while ($query->have_posts()) {
        $query->the_post();
        $projects[] = [
            'title'        => get_the_title(),
            'excerpt'      => wp_kses_post(get_the_excerpt()),
            'thumbnail'    => get_the_post_thumbnail_url(get_the_ID(), 'large'),
            'link'         => get_post_meta(get_the_ID(), '_project_link', true),
            'technologies' => get_the_terms(get_the_ID(), 'technology') ?: [],
        ];
    }
    wp_reset_postdata();

    $left  = array_filter($projects, fn($i) => $i % 2 === 0, ARRAY_FILTER_USE_KEY);
    $right = array_filter($projects, fn($i) => $i % 2 !== 0, ARRAY_FILTER_USE_KEY);

    ob_start();
    ?>
    <div class="portfolio-projects-grid">
        <div class="portfolio-projects-column">
            <div class="portfolio-root__header">
                <h2 class="portfolio-root__title">Ausgewählte Projekte</h2>
            </div>
            <?php foreach ($left as $project): ?>
                <?php echo portfolio_render_project_card($project); ?>
            <?php endforeach; ?>
        </div>
        <div class="portfolio-projects-column portfolio-projects-column--offset">
            <?php foreach ($right as $project): ?>
                <?php echo portfolio_render_project_card($project); ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php
    return portfolio_minify_html(ob_get_clean());
}

function portfolio_render_project_card($project) {
    ob_start();
    ?>
    <div class="portfolio-project-card">
        <div class="portfolio-project-card__body">
            <?php if (!empty($project['technologies'])): ?>
                <div class="portfolio-project-card__tags">
                    <?php foreach ($project['technologies'] as $tech): ?>
                        <span class="portfolio-project-card__tag"><?php echo esc_html(trim($tech->name)); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <h2 class="portfolio-project-card__title">
                <?php echo esc_html($project['title']); ?>
            </h2>

            <?php if ($project['excerpt']): ?>
                <?php if ($project['excerpt']): ?>
                    <div class="portfolio-project-card__excerpt"><?php echo $project['excerpt']; ?></div>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ($project['link']): ?>
                <a href="<?php echo esc_url($project['link']); ?>"
                   class="portfolio-project-card__link"
                   target="_blank" rel="noopener">
                    <?php echo esc_url($project['link']); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if ($project['thumbnail']): ?>
            <div class="portfolio-project-card__image">
                <img src="<?php echo esc_url($project['thumbnail']); ?>"
                     alt="<?php echo esc_attr($project['title']); ?>">
            </div>
        <?php endif; ?>
    </div>
    <?php
    return portfolio_minify_html(ob_get_clean());
}

add_shortcode('portfolio_projects', 'portfolio_projects_shortcode');
