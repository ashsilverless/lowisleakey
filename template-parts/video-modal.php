<div class="video-modal">
    <?php if (have_rows('video_modal')):
        while (have_rows('video_modal')):
            the_row();
            $modalVideo = get_sub_field('video_file'); ?>

    <video controls>
        <source src="<?php echo esc_url($modalVideo['url']); ?>" type="video/mp4">
    </video>

    <?php endwhile; endif; ?>
    <div class="close"></div>

</div>