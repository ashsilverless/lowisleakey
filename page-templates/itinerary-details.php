<?php
/**
 * ============== Template Name: Itinerary Details Page
 *
 * @package lowisleakey
 */
get_header(); ?>

<?php get_template_part('template-parts/check-password'); ?>

<script>
    document.getElementById("goto-itin").onclick = function () { findItinerary() };
    function findItinerary() {
        var url = document.getElementById('unique_id').value;
        window.location.href = window.location.href + url;
    }
</script>

<?php get_footer(); ?>