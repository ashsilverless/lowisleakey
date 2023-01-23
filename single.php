<?php

/**
 * The template for displaying all single posts
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part("template-parts/hero"); ?>

<div class="row grid-layout2">
    <div class="leading-copy">
        <?php the_field('leading_copy');?>
    </div>

    <div>
        <div class="small-cta fmright">
            <?php get_template_part("inc/img/leopard"); ?>
            <p>If you’d like to travel with us to see anything contained in this article for yourself, please contact us
                now for
                a chat:</p>
            <p class="email"><?php the_field('email_address', 'options');?></p>
            <p class="tel"><?php the_field('telephone_number', 'options');?></p>
        </div>
    </div>

</div>

<article>

    <?php if (have_rows('sections')): ?>
    <?php while (have_rows('sections')): ?>
    <?php the_row(); ?>

    <?php if (get_row_layout() == 'twin_column'): ?>
    <div class="row twin-column">
        <h2 class="heading heading__sm">
            <? the_sub_field('heading');?>
        </h2>
        <p>
            <? the_sub_field('copy');?>
        </p>
    </div>

    <?php elseif (get_row_layout() == 'gallery_section'): ?>
    <div class="gallery">
        <div class="row">
            <?php
        $images = get_sub_field('gallery');
        if ($images): ?>
            <?php foreach ($images as $image): ?>
            <a data-fslightbox="gallery" href="<?php echo esc_url($image['url']); ?>"
                title="<?php echo esc_attr($image['caption']); ?>">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
                    class="" />
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <?php elseif (get_row_layout() == 'image_with_text'): 
        $image = get_sub_field('image');
        ?>

    <div class="image-text-section">
        <div class="row grid-layout2">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="fmleft <?php if (get_sub_field('image_placement') == 'right'){
    echo 'invert fmright';
}?>" />
            <div class="text fmbottom <?php if (get_sub_field('image_placement') == 'right'){
    echo 'invert';
}?>">
                <?php the_sub_field('text');?>
            </div>

        </div>
    </div>

    <?php elseif (get_row_layout() == 'text_with_quote'): ?>

    <div class="text-quote-section">
        <div class="row grid-layout2">
            <div class="text">
                <div>
                    <?php the_sub_field('text');?>
                </div>
            </div>
            <div class="quote fmright">
                <div>
                    <p class="heading heading__primary heading__sm heading__unset-case quote">
                        <span>"</span><?php the_sub_field('quote');?><span>"</span>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <?endif;?>
    <?endwhile; endif?>
</article>

<div class="vertical-spacing"></div>

<section class="archive">
    <div class="row header">
        <h4 class="heading heading__xs heading__primary">Archive</h4>
        <h3 class="heading heading__sm">Older Articles</h3>
    </div>
    <div class="row grid-layout3">
        <?php $loop = new WP_Query(
        array(
            'post_type' => 'post',
            'post__not_in' => array( get_the_ID() ),
            'posts_per_page' => 9,
            'orderby' => 'date',
            'order' => 'DESC'
        )
    ); ?>
        <?php while ($loop->have_posts()):
        $loop->the_post(); 
        $id = get_the_ID();
        $image = get_field('hero_background_image', $id);
        ?>
        <div class="article-card">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="" />
            <div class="lower">
                <p class="date">
                    <? echo get_the_date( 'd.m.Y' );?>
                </p>
                <h2 class="heading heading__xs">
                    <? the_title();?>
                </h2>
                <a href="<? the_permalink();?>" class="button">Read More</a>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata(); ?>



    </div>
</section>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>