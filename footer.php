<?php
/**
 * The template for displaying the footer
 * @package lowisleakey
 */
?>

<?php wp_footer(); ?>
</main>

<?php if (!is_404() ){?>

<?php if (!is_page(array('your-safari'))) { ?>

<?php if (!is_singular(array('properties', 'itineraries'))) { ?>

<footer>

    <?php 
    $term = get_queried_object();
    if (get_field('footer_required', $term) == 'yes') {
        $footer_background = get_field('footer_background_image', $term); ?>

    <div class="footer-cta" style="background-image:url(<?php echo $footer_background['url'] ?>);">
        <div class="row">
            <div class="copy">
                <h3 class="heading heading__sm">
                    <?php the_field('footer_copy', $term); ?>
                </h3>
                <?php ?>
            </div>
            <a href="<?php the_field('footer_button_target', $term); ?>" class="button button__ghost button__inline">
                <?php the_field('footer_button_text', $term); ?>
            </a>
        </div>
    </div>

    <?php } else {

        if (have_rows('site-wide_testimonial', 'options')):

            while (have_rows('site-wide_testimonial', 'options')):
                the_row();
                $testimonialBackground = get_sub_field('testimonial_background')['url'];
                $testimonialCopy = get_sub_field('testimonial');
                $testimonialAuthor = get_sub_field('author');

    ?>
    <div class="testimonial" style="background-image:url(<?php echo $testimonialBackground; ?>);">
        <div class="row">
            <div class="testimonial__item">
                <p class="copy">
                    <?php echo $testimonialCopy; ?>
                </p>
                <p class="author">
                    <?php echo $testimonialAuthor; ?>
                </p>
                <?php ?>
            </div>
            <a href="" class="button button__ghost button__inline">Plan Now</a>
        </div>
    </div>

    <?php endwhile; endif;

    } ?>

    <div class="lower-panel">
        <div class="row">
            <?php get_template_part('inc/img/logo'); ?>
        </div>
        <div class="row grid-layout-footer">

            <div class="meta">
                <p>
                    <a href="mailto: <?php the_field('email_address', 'options'); ?>">
                        <?php the_field('email_address', 'options'); ?>
                    </a>
                </p>
                <p>
                    <a href="tel:<?php the_field('telephone_number', 'options'); ?>">
                        <?php the_field('telephone_number', 'options'); ?>
                    </a>

                </p>
            </div>

            <?php
    if (have_rows('left_footer_menu', 'options')):
        while (have_rows('left_footer_menu', 'options')):
            the_row(); ?>
            <div class="left-menu">
                <?php
            if (have_rows('menu_items')):
                while (have_rows('menu_items')):
                    the_row();
                    $footerlink = get_sub_field('text'); ?>
                <p class="menu-item">
                    <a href="<?php the_sub_field('target'); ?>">
                        <?php echo $footerlink; ?>
                    </a>
                </p>

                <?php endwhile; endif; ?>
            </div>
            <?php endwhile; endif; ?>
            <?php
    if (have_rows('right_footer_menu', 'options')):
        while (have_rows('right_footer_menu', 'options')):
            the_row(); ?>
            <div class="right-menu">
                <?php
            if (have_rows('menu_items')):
                while (have_rows('menu_items')):
                    the_row();
                    $footerlink = get_sub_field('text'); ?>
                <p class="menu-item">
                    <a href="<?php the_sub_field('target'); ?>">
                        <?php echo $footerlink; ?>
                    </a>
                </p>
                <?php endwhile; endif; ?>
            </div>
            <?php endwhile; endif; ?>

            <div class="video">
                <p>Watch our full video</p>
                <?php get_template_part('inc/img/play'); ?>
            </div>

        </div>

    </div>

    </div>

    <div class="socket">
        <div class="row grid-layout-footer">
            <div></div>
            <div class="left">
                <p>
                    <a href="/terms-and-conditions">
                        Terms & Conditions
                    </a>
                </p>
            </div>
            <div class="right">
                <p>&copy; Lowis & Leakey</p>
            </div>
        </div>

    </div>

</footer>

<?php } ?>
<?php } ?>
<?php } ?>

<?php if (is_singular(array('properties', 'itineraries'))) { ?>

<div class="personal-footer">
    <?php get_template_part('inc/img/logo'); ?>
    <p class="heading heading__sm" id="familyname"></p>
    <p><?php the_field('footer_text_prop', 'options');?><span id="authname"></span> here:</p>
    <div class="contacts">
        <p id="telnode"></p>
        <p id="emailnode"></p>
    </div>

</div>

<script>
jQuery(document).ready(function($) {
    var famname = window.localStorage.getItem('family_group');
    var authname = window.localStorage.getItem('authname');
    var telnumber = window.localStorage.getItem('authtel');
    var authemail = window.localStorage.getItem('authmail');
    $('#familyname').html(famname);
    $('#authname').html(authname);
    $('#telnode').html('<a href="tel:' + telnumber + '">' + telnumber + '</a>');
    $('#emailnode').html('<a href="mailto:' + authemail + '">' + authemail + '</a>')

});
</script>

<div class="personal-socket">
    <p>Terms & Conditions</p>
    <p>&copy; Lowis & Leakey <?php echo date("Y");?></p>
</div>

<?php }?>


</body>

</html>