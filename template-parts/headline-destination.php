<?php $term = get_queried_object();?>
<div class="headline-wrapper destination">
    <div class="headline">
        <div class="row">
            <div class="grid-layout2">
                <div>
                    <p class="heading heading__primary heading__sm">
                        <?php the_field('destination_leading_text', $term); ?>
                    </p>
                    <?php the_field('destination_main_copy', $term); ?>
                </div>
                <div class="map">
                    <?php get_template_part("inc/img/africa-map"); ?>
                </div>
                <?php $term = strtolower($term->name); ?>
                <script>
                document.getElementById('<?php print($term); ?>').classList.add("active");
                </script>
            </div>
        </div>
    </div>
</div>