<?php
/**
 * The template for displaying all single posts
 *
 * @package lowisleakey
 */
get_header(); ?>
<?php
if (get_field('hero_background_image')) { 
    $heroImage = get_field('hero_background_image');
    if (get_field("hero_background_video")) {
        $video = get_field("hero_background_video");
    }
}
$tags = get_terms('destination');?>

<div class="hero jumbo" style="background-image: url(<?php echo $heroImage['url']; ?>);">
    <div class="row">
        <a href="javascript:history.back()" class="back">
            <?php get_template_part('inc/img/chevron'); ?>
            <h4 class="heading heading__xs">Back to Itinerary</h4>
        </a>
    </div>

    <div class="details-panel">
        <div class="row grid-layout2">
            <div class="property">
                <h4 class="heading heading__xs heading__primary">Properties</h4>
                <h1 class="heading heading__med"><?php the_title();?></h1>
            </div>
            <div class="location">
                <h2 class="heading heading__sm heading__primary region"><?php the_field('region');?></h2>
                <h2 class="heading heading__sm heading__primary">
                    <?php foreach ($tags as $tag): echo $tag->name; endforeach; ?>
                </h2>
            </div>
        </div>
    </div>

</div>

<div class="row grid-layout2">
    <div class="headline">
        <p class="heading heading__primary heading__sm heading__unset-case"><?php the_field('hero_heading'); ?></p>
        <p><?php the_field('main_copy'); ?></p>
    </div>
    <div class="property-details">


        <?php $facs = get_the_terms($post->ID, 'facility');
            if ($facs) {?>
        <h4 class="heading heading__sm heading__primary">Facilities</h4>
        <div class="icon-grid">
            <?php foreach ($facs as $fac) { ?>
            <p class="meta__list">
                <img src="<?php the_field('small_icon', $fac);?>" alt="<?php echo $fac->name;?>" />
            </p>
            <?php }?>

        </div>
        <?php } ?>

        <?php $acts = get_the_terms($post->ID, 'activity');
            if ($acts) {?>
        <h4 class="heading heading__sm heading__primary">Activities</h4>
        <div class="icon-grid">
            <?php foreach ($acts as $act) { ?>
            <p class="meta__list">
                <img src="<?php the_field('small_icon', $act);?>" alt="<?php echo $act->name;?>" />
            </p>
            <?php }?>
        </div>
        <?php } ?>

    </div>
</div>

<div class="vertical-spacing"></div>


<div class="masonry-gallery masonry-gallery__3cols">
    <div class="row grid-layout2">
        <div>
            <h2 class="heading heading__sm heading__primary"><?php the_title();?></h2>
            <h4 class="heading heading__med"><?php the_field('gallery_heading');?></h4>
            <p><?php the_field('gallery_copy');?></p>
        </div>
    </div>
    <div class="row">
        <?php
        $images = get_field('images');
        if ($images): ?>

        <?php foreach ($images as $image): ?>

        <a data-fslightbox="gallery" href="<?php echo esc_url($image['url']); ?>"
            title="<?php echo esc_attr($image['caption']); ?>">
            <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        </a>

        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>


<div class="vertical-spacing"></div>

<?php get_footer(); ?>