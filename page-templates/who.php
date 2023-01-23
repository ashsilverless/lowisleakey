<?php
/**
 * ============== Template Name: Who We Are
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<div class="headline headline__quote">
    <div class="row grid-layout2 grid-layout2__narrow-second-col">
        <div class="">
            <p class="heading heading__primary heading__sm heading__unset-case">
                <?php the_field('leading_copy'); ?>
            </p>
        </div>
        <div></div>
        <div>
            <p class="heading heading__primary heading__sm heading__unset-case quote">
                <span>"</span>
                <?php the_field('quote'); ?>
                <span>"</span>
            </p>
        </div>
    </div>
</div>

<div class="vertical-spacing"></div>


<?php if (have_rows('gallery_text_panel')): ?>
<?php while (have_rows('gallery_text_panel')): ?>
<?php the_row(); ?>
<div class="fmbottom gallery_with_text">
    <div class="row">
        <?php if (get_row_layout() == 'gallery'): ?>
        <?php if (have_rows('images')): ?>
        <div class="who-slider owl-carousel owl-theme">
            <?php while (have_rows('images')): ?>

            <?php the_row(); ?>

            <?php $gallery_image = get_sub_field('image'); ?>
            <div class="who-slider__image" style="background-image:url(<?php echo ($gallery_image); ?>);"></div>

            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <div class="gallery_with_text__header">
            <h3 class="heading">
                <?php the_sub_field('heading'); ?>
                <?php get_template_part('inc/img/chevron'); ?>
            </h3>
            <p class="copy">
                <?php the_sub_field('copy'); ?>
            </p>
        </div>

        <?php endif; ?>
    </div>
</div>
<?php endwhile;
endif; ?>

<div class="vertical-spacing"></div>

<?php get_template_part("template-parts/slider-cta"); ?>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>