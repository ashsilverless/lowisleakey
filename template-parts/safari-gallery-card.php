<div class="gallery-feed__card">
    <div class="meta">
        <h3 class="heading heading__sm">
            <?php the_title(); ?>
        </h3>
        <p>
            <?php the_field('dates'); ?>
        </p>
        <?php $terms = get_the_terms($post->ID, 'gallery_location');
                if ($terms) {
                    foreach ($terms as $term) { ?>
        <p class="meta__list">
            <?php echo $term->name; ?>
        </p>
        <?php }
                } ?>
        <a href="<?php the_permalink(); ?>" class="button">See Full Album</a>
    </div>

    <div class="gallery-featured-image" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"></div>

</div>