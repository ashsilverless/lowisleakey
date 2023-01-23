<div class="headline-wrapper destination">
    <div class="headline">
        <div class="row">
            <div class="grid-layout2">
                <div>
                    <p class="heading heading__primary heading__sm">
                        <?php the_field('destination_leading_text'); ?>
                    </p>
                    <?php the_field('destination_main_copy'); ?>
                </div>
                <div class="map">
                    <?php get_template_part("inc/img/africa-map"); ?>
                </div>
                <?php $term = get_queried_object();
                $term = strtolower($term->name); ?>
                <script>
                    document.getElementById('<?php print($term); ?>').classList.add("active");
                </script>
            </div>
        </div>
    </div>
</div>