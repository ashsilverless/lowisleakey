<?php

/**
 * The template for displaying all single itineraries
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/check-password'); ?>
<?php $the_id = get_field('unique_id'); ?>
<?php $the_password = get_field('password'); ?>

<script>
document.getElementsByTagName('html')[0].style.overflow = "hidden";
document.getElementById("check-details").onclick = function() {
    accessItinerary()
};

function accessItinerary() {
    var required_password = "<?php print($the_password); ?>";
    var submitted_password = document.getElementById("password").value;
    if (submitted_password == required_password) {
        document.getElementById('login-overlay').classList.add("fadeOut");
        document.querySelector('.single-itineraries header').classList.add("visible");
        document.getElementsByTagName('html')[0].style.overflow = "auto";
    } else {
        document.querySelector('.error-message.password').style.display = 'block';
        document.querySelector('.details-entry').classList.add("password-error");
        document.getElementById("password").value = '';
    }
}
window.onload = function animateForm() {
    document.getElementsByName('uniqueID')[0].placeholder = '<?php print($the_id); ?>';
    document.querySelector('.single-itineraries main').classList.add("loaded");
    document.querySelector('.proceed-itin').classList.add("hide");
}
</script>

<div id="page-content">
    <div class="hero no-image">
            <div class="row">
            <h1>The Itinerary Content Will Be Here</h1>
            <?php the_field('test'); ?>
        </div>
    </div>

</div>



<?php get_footer(); ?>