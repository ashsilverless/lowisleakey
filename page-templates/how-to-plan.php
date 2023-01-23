<?php
/**
 * ============== Template Name: How To Plan
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<div class="vertical-spacing"></div>

<div class="accordion">
    <div class="row">

        <?php if (have_rows('accordion')): ?>
        <?php while (have_rows('accordion')): ?>
        <?php the_row(); ?>

        <div class="accordion__item">

            <div class="accordion__item-question">
                <h3 class="heading heading__xs heading__primary">
                    <?php the_sub_field('question'); ?>
                </h3>

                <?php get_template_part('inc/img/chevron'); ?>
            </div>

            <div class="accordion__item-answer">
                <?php if (have_rows('answer')): ?>
                <?php while (have_rows('answer')): ?>
                <?php the_row(); ?>
                <div class="sub-section">
                    <div class="content">
                        <p class="heading__sm">
                            <?php the_sub_field('heading'); ?>
                        </p>

                        <p>
                            <?php the_sub_field('copy'); ?>
                        </p>
                    </div>
                    <?php if (get_sub_field('button_text')) { ?>
                    <a href="<?php the_sub_field('button_target'); ?>" class="button">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                    <?php } ?>



                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="vertical-spacing"></div>

<?php get_footer(); ?>