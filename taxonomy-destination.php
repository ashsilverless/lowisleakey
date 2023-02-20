<?php
/**
 * The template for displaying destinations
 *
 * @package lowisleakey
 */
get_header(); ?>
<?php $term = get_queried_object();
$termlower = strtolower($term->name); ?>
<?php $pageImage = get_field('hero_image', $term); ?>
<div class="hero hero__destination" style="background-image: url(<?php echo $pageImage['url']; ?>);">
    <div class="row">
        <a href="/where-we-go">
            <p class="heading">
                <?php get_template_part('inc/img/chevron'); ?>Return
            </p>
        </a>
        <h3 class=" heading heading__sm heading__light">Discover</h3>
        <h1 class="heading heading__xl heading__light">
            <?php echo $term->name; ?>
        </h1>
    </div>
    <div class="see-more">
        <?php get_template_part('inc/img/chevron'); ?>
    </div>
</div>

<?php get_template_part('template-parts/headline-destination'); ?>

<div class="vertical-spacing"></div>

<?php get_template_part('template-parts/highlights'); ?>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>