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

<div class="vertical-spacing"></div>

<div class="gallery-feed">
    <div class="row">

        <div class="head-section">
            <h4 class="heading heading__xs heading__primary">Archive</h4>
            <h3 class="heading heading__med">More Safari Diaries</h3>
        </div>

        <?php $loop = new WP_Query(
        array(
            'post_type' => 'safari_gallery',
            'posts_per_page' => 5,
            'post__not_in' => array( get_the_ID() ),
            'orderby' => 'date',
            'order' => 'DESC'
        )
    ); ?>
        <?php while ($loop->have_posts()):
        $loop->the_post(); 
        $id = get_the_ID();
        $image = get_field('hero_background_image', $id);
        
        
        ?>
        <?php get_template_part('template-parts/safari-gallery-card'); ?>

        <?php
    endwhile;
    wp_reset_postdata();
    paginate_posts();
    ?>
    </div>
</div>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>