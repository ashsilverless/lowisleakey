<?php
/**
 * ============== Template Name: Contact Page Template
 *
 * @package lowisleakey
 */
get_header('contact'); ?>

<div class="hero no-image">
    <div class="row">
        <h1 class="heading heading__med heading__dark heading__center">Contact Us</h1>
        <div class="narrow">
            <?php echo do_shortcode('[contact-form-7 id="361" title="Main Contact Form"]');?>
        </div>
    </div>
</div>

<?php get_footer(); ?>