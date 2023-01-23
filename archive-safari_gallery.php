<?php
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<?php get_template_part('template-parts/sort-posts'); ?>

<div class="gallery-feed">
    <?php while (have_posts()):
        the_post(); ?>

    <div class="fmbottom row">
        <?php get_template_part('template-parts/safari-gallery-card'); ?>
    </div>

    <?php
    endwhile;
    //wp_reset_postdata();
    paginate_posts();
    ?>
</div>
<?php get_footer(); ?>