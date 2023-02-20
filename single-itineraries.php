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
<?php $family_group = get_the_title(); ?>
<?php 
    if (have_rows('itinerary_created_by')):
        while (have_rows('itinerary_created_by')):
            the_row();
            $itin_authorname = get_sub_field('name'); 
            $itin_authortel = get_sub_field('tel_number'); 
            $itin_authoremail = get_sub_field('email'); 
        endwhile;
    endif;
    
    ?>


<script>
document.getElementsByTagName('html')[0].style.overflow = "hidden";
document.getElementById("check-details").onclick = function() {
    accessItinerary();
    //grab_family_name();
};

// function grab_family_name() {
//     var family_group = "<?php print($family_group); ?>";
//     window.localStorage.setItem('family_group', family_group);
// }

function accessItinerary() {
    var required_password = "<?php print($the_password); ?>";
    var submitted_password = document.getElementById("password").value;
    var family_group = "<?php print($family_group); ?>";
    var itin_authorname = "<?php print($itin_authorname); ?>";
    var itin_authortel = "<?php print($itin_authortel); ?>";
    var itin_authoremail = "<?php print($itin_authoremail); ?>";
    if (submitted_password == required_password) {
        document.getElementById('login-overlay').classList.add("fadeOut");
        document.querySelector('.single-itineraries header').classList.add("visible");
        document.getElementsByTagName('html')[0].style.overflow = "auto";
        window.localStorage.setItem('itin_password', required_password);
        window.localStorage.setItem('family_group', family_group);
        window.localStorage.setItem('authname', itin_authorname);
        window.localStorage.setItem('authtel', itin_authortel);
        window.localStorage.setItem('authmail', itin_authoremail);
        document.getElementsByTagName('html')[0].style.overflow = "auto";
    } else {
        document.querySelector('.error-message.password').style.display = 'block';
        document.querySelector('.details-entry').classList.add("password-error");
        document.getElementById("password").value = '';
    }
}
window.onload = function animateForm() {
    var required_password = "<?php print($the_password); ?>";
    var loaded_id = window.localStorage.getItem('itin_password');
    if (loaded_id === required_password) {
        document.getElementById('login-overlay').classList.add("fadeOut");
        document.querySelector('.single-itineraries header').classList.add("visible");
    }
    document.getElementsByName('uniqueID')[0].placeholder = '<?php print($the_id); ?>';
    document.querySelector('.single-itineraries main').classList.add("loaded");
    document.querySelector('.proceed-itin').classList.add("hide");
}
</script>

<div id="page-content">

    <?php get_template_part('template-parts/hero'); ?>
    <?php the_field('group_name'); ?>
    <?php the_field('itinerary_title'); ?>

</div>

<script>

</script>

<?php get_footer(); ?>