<?php

/**
 * Header
 *
 * @package lowisleakey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo is_front_page() ? get_bloginfo('name') : wp_title(''); ?>
    </title>
    <script src="https://kit.fontawesome.com/4faa096376.js" crossorigin="anonymous" defer="defer"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <!-- <script src='https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v2.0.0/turf.min.js'></script> -->
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://use.typekit.net/viz5vdm.css">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <?php if (!is_404() ){?>
    <?php if (!is_page(array('your-safari'))) { ?>

    <?php get_template_part('template-parts/video-modal'); ?>

    <header>
        <div class="row-wide">
            <div class="logo">
                <a href="<?php echo site_url(); ?>">
                    <?php get_template_part('inc/img/logo'); ?>
                </a>
            </div>
            <menu>
                <? wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container_class' => 'main-menu'
                )); ?>
            </menu>
            <!-- <div class="search">
                <input type="Search" id="search-field" placeholder="Search" />
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
            <a href=" /your-safari" class="primary-link">
                <span>YOUR ITINERARY</span>
                <?php get_template_part('inc/img/padlock'); ?>
            </a>
        </div>
    </header>

    <?php } ?>
    <?php } ?>
    <main>

        <!--closes in footer.php-->