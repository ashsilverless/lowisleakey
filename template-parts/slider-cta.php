<?php $pages = get_pages(
    array(
        'meta_key' => '_wp_page_template',
        'meta_value' => 'page-templates/home.php'
    )
);
foreach ($pages as $page) {
    $page = $page->ID;
} ?>

<div class="fmbottom slider-cta owl-carousel owl-theme">
    <?php
    if (have_rows('slider_slide_cta', $page)):
        while (have_rows('slider_slide_cta', $page)):
            the_row();
            $slideBackground = get_sub_field('background_image', $page);
    ?>
    <div class="slider-cta__slide" style="background-image: url(<?php echo $slideBackground['url']; ?>);">
        <div class="slider-cta__panel">
            <h3 class="heading heading__med">
                <?php the_sub_field('heading', $page); ?>
            </h3>
            <p>
                <?php the_sub_field('main_copy', $page); ?>
            </p>
            <div class="button button__light">Find Out More</div>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
</div>