<div class="where-we-go">
    <?php get_template_part('inc/img/format-select__destination'); ?>
    <h1 class="heading heading__lg heading__center">
        Where We Go
    </h1>
    <div class="row map-layout">
        <div class="grid-layout2">
            <div class="map-wrapper">
                <?php get_template_part('inc/img/africa-map'); ?>
            </div>
            <div class="country-panel">
                <?php $terms = get_terms(
                    array(
                        'taxonomy' => 'destination',
                        'hide_empty' => false,
                        //'parent' => $term_id,
                    )
                ); ?>
                <?php if (!empty($terms) && is_array($terms)) {
                    foreach ($terms as $term) {
                        $term_link = get_term_link($term);
                ?>
                <a href="/destination/<?php echo strtolower($term->name); ?>">
                    <p id="<?php echo strtolower($term->name); ?>" class="<?php echo strtolower($term->name); ?>">
                        <span>Visit</span>
                        <?php echo $term->name; ?>
                        <?php get_template_part('inc/img/chevron'); ?>
                    </p>
                </a>
                <?php }
                }
                ?>
            </div>
        </div>

    </div>
    <div class="row grid-layout">
        <div class="grid-layout__wrapper">
            <?php $terms = get_terms(
                array(
                    'taxonomy' => 'destination',
                    'hide_empty' => false,
                    //'parent' => $term_id,
                )
            ); ?>
            <?php

            $terms = get_terms([
                'taxonomy' => 'destination',
                'hide_empty' => false,
            ]);

            foreach ($terms as $term) {
                $termID = $term->term_id;
                $term_image = get_field('hero_image', $term);
                if ($term_image) { ?>

            <a href="/destination/<?php echo strtolower($term->name); ?>" class="grid-layout__item">
                <img src="<?php echo esc_url($term_image['url']); ?>"
                    alt="<?php echo esc_attr($term_image['alt']); ?>" />
                <h2 id="<?php echo strtolower($term->name); ?>" class="heading heading__sm">
                    <?php echo $term->name; ?>
                </h2>
            </a>


            <?php }
            } ?>

        </div>
    </div>
</div>