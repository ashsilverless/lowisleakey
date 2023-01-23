<?php get_template_part('inc/img/format-select__highlight'); ?>
<div class="highlights owl-carousel owl-theme">
    <?php
    if (have_rows('highlights')):
        while (have_rows('highlights')):
            the_row();
    ?>
    <div>
        <div class="highlights__slide">
            <?php
            $image = get_sub_field('background_image');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if ($image) { ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php } ?>
            <div class="highlights__panel">
                <h3 class="heading heading__sm">
                    <?php the_sub_field('leading_text'); ?>
                </h3>
                <h2 class="heading heading__lg">
                    <?php the_sub_field('large_text'); ?>
                </h2>
            </div>
        </div>
    </div>
    <?php endwhile;
    endif; ?>
</div>
<div class="row">
    <div id="highlightGrid" class="highlight-grid">
        <?php
        if (have_rows('highlights')):
            while (have_rows('highlights')):
                the_row();
        ?>
        <div class="highlight-grid__item">
            <?php
                $image = get_sub_field('background_image');
                if ($image) { ?>

            <a data-fslightbox="gallery" href="<?php echo esc_url($image['url']); ?>"
                title="<?php echo esc_attr($image['caption']); ?>" data-caption="
                <div class='highlight-grid__panel'>
                <h3 class='heading heading__sm'>
                    <?php the_sub_field('leading_text'); ?>
                </h3>
                <h2 class='heading heading__lg'>
                    <?php the_sub_field('large_text'); ?>
                </h2>
        </div>


        ">
                <img src="<?php echo esc_url($image['sizes']['large']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>



            <?php } ?>
        </div>


        <?php endwhile;
        endif; ?>
    </div>
</div>

<script>
    document.getElementById('highlightGrid').style.display = 'none';
    document.getElementById('wide-format').classList.add('highlight');
</script>