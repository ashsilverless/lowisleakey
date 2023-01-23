<?php
/**
 * ============== Template Name: News
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<div class="featured-section">
    <div class="row">

        <?php $loop = new WP_Query(
        array(
            'post_type' => 'post',
            'posts_per_page' => 2,
            'orderby' => 'date',
            'order' => 'DESC'
        )
    ); ?>
        <?php while ($loop->have_posts()):
        $loop->the_post(); 
        $id = get_the_ID();
        $image = get_field('hero_background_image', $id);
        ?>

        <div class="featured-section__card fmbottom">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <div class="detail">
                <p class="date">
                    <? echo get_the_date( 'd.m.Y' );?>
                </p>
                <h2 class="heading heading__xs">
                    <? the_title();?>
                </h2>
                <?php the_field('leading_copy');?>
                <a href="<? the_permalink();?>" class="button">Read More</a>
            </div>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    paginate_posts();
    ?>
    </div>
</div>

<section class="archive news">
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
        <div class="article-card fmbottom">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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