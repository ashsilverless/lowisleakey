<?php

/**
 * The template for displaying all single safari galleries
 *
 * @package lowisleakey
 */
get_header(); ?>

<div class="hero no-image">
    <div class="diary">
        <div class="row center">
            <p>
                <?php the_field('dates'); ?>
            </p>
            <h1 class="heading heading__lg">
                <?php the_title() ?>
            </h1>

            <div class="meta">
                <?php $terms = get_the_terms($post->ID, 'gallery_location');
                if ($terms) {
                    foreach ($terms as $term) { ?>
                <p class="meta__list">
                    <?php echo $term->name; ?>
                </p>
                <?php }
                } ?>
            </div>

        </div>
    </div>
</div>

<div class="masonry-gallery">
    <div class="row">

        <?php
        $images = get_field('images');
        if ($images): ?>

        <?php foreach ($images as $image): ?>

        <a data-fslightbox="gallery" href="<?php echo esc_url($image['url']); ?>"
            title="<?php echo esc_attr($image['caption']); ?>">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </a>

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>