<?php
/**
 * ============== Template Name: Home Page
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<?php get_template_part("template-parts/headline"); ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/map-country"); ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/slider-cta"); ?>

<div class="vertical-spacing"></div>

<div class="row diaries-feed">
    <div class="grid-layout2">
        <div>
            <h4 class="heading heading__med">Safari Diaries</h4>
            <p>The best way to show what we do is through the lens of our trips. Below are photo diaries of recent
                adventures:</p>
        </div>
    </div>

</div>

<div class="gallery-feed">

    <?php
    $loop = new WP_Query(
        array(
            'post_type' => 'safari_gallery',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC'
        )
    ); ?>
    <?php while ($loop->have_posts()):
        $loop->the_post(); ?>

    <div class="fmbottom row">
        <?php get_template_part('template-parts/safari-gallery-card'); ?>

    </div>

    <?php
    endwhile;
    wp_reset_postdata(); ?>

</div>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>