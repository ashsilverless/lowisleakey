<?php
if (get_field('hero_background_image')) { ?>

<?php
    $heroImage = get_field('hero_background_image');
    if (get_field("hero_background_video")) {
        $video = get_field("hero_background_video");
    }
?>

<?php
if (is_front_page()) {
    $heroSize = 'full-height';
} else if ( 'properties' == get_post_type() ){
    $heroSize = 'jumbo';
} else {
    $heroSize = 'standard';
} ?>

<?php if ( 'itineraries' == get_post_type() ){ ?>

<div class="row static-logo">
    <?php get_template_part('inc/img/logo'); ?>
</div>

<?php }?>

<div class="hero <?php echo $heroSize; ?>" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <?php if (is_front_page()) { ?>
    <div class="wrapper-video">
        <video autoplay loop>
            <source src="<?php echo $video; ?>">
            </source>
        </video>
    </div>
    <?php } ?>

    <div class="row grid-layout2 ">
        <div class="hero__heading">

            <?php 
            if ( 'itineraries' == get_post_type() ){ 
            echo '<h3 class="heading heading__xs heading__primary">Where We Go</h3>';  
            } ?>

            <h2 class="heading heading__sm heading__alt date">
                <? if (is_singular('post')) {
                $post_date = get_the_date( 'd.m.Y' );
                echo $post_date;
                } else if ( 'itineraries' OR 'properties' == get_post_type() ){ 
                echo '';
                } else {
                    echo 'Lowis & Leakey';
                }?>
            </h2>

            <?php if ( 'itineraries' == get_post_type() ){ 
                echo '<h2 class="heading heading__med heading__alt">';
                the_title();
                echo '</h2>';
            }?>

            <h1 class="heading heading__xl">
                <?php if (is_front_page()) {
                        the_field('hero_heading');
                    } else if ( 'itineraries' == get_post_type() ){ 
                        the_field('itinerary_title');
                    } else if ( 'properties' == get_post_type() ){ 
                        echo '';
                    } else {
                        the_title();
                    } ?>
            </h1>
        </div>

        <?php if (is_front_page()) { ?>
        <div class="fmbottom video">
            <p>Watch our full video</p>
            <?php get_template_part('inc/img/play'); ?>
        </div>
        <?php } ?>

    </div>

</div>

<?php } else { ?>

<div class="hero no-image">

    <div class="row">
        <h1 class="heading heading__med heading__dark heading__center">
            <?php if (is_post_type_archive('safari_gallery')) {
        echo 'Safari Diaries';
    } else {
        the_title();
    } ?>
        </h1>

        <div class="narrow">
            <?php if (is_post_type_archive('safari_gallery')) { ?>
            <p>
                <?php the_field('leading_text', 'options'); ?>
            </p>
            <?php } else { ?>
            <p>
                <?php the_field('leading_copy'); ?>
            </p>
            <?php } ?>
        </div>

    </div>


</div>

<?php } ?>