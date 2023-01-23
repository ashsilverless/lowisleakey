<?php
/**
 * ============== Template Name: What We Do
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<div class=" headline headline__quote">
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

<div class="services">
    <div class="row">
        <?php if (have_rows('services')): ?>
        <?php while (have_rows('services')): ?>
        <div class="services__item">
            <?php the_row(); ?>

            <?php if (get_row_layout() == 'service'): ?>
            <div class="services__header">
                <h3 class="heading heading__xs heading__primary">
                    <?php the_sub_field('type'); ?>
                </h3>
                <h3 class="heading heading__sm">
                    <?php the_sub_field('title'); ?>
                </h3>
                <p>
                    <?php the_sub_field('description'); ?>
                </p>
            </div>
            <?php if (have_rows('service_card')): ?>
            <?php while (have_rows('service_card')): ?>
            <div class="services__card fmbottom">
                <?php the_row(); ?>
                <div class="copy">
                    <h2 class="heading heading__sm">
                        <?php the_sub_field('card_title'); ?>
                    </h2>
                    <p>
                        <?php the_sub_field('card_description'); ?>
                    </p>
                </div>
                <?php $card_image = get_sub_field('card_image'); ?>
                <div class="card_image" style="background-image:url(<?php echo esc_url($card_image['url']); ?>);"></div>
            </div>
            <?php endwhile;
                    endif;


                endif ?>
        </div>

        <?php endwhile;
        endif; ?>
    </div>
</div>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>