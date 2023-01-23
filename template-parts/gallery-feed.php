
<select name="sort-posts" id="sortbox" onchange="document.location.href='?=<?php the_search_query(); ?>&'+this.options[this.selectedIndex].value;">


    <option value="" disabled>Sort by</option>
    <option value="orderby=date&order=dsc">Newest</option>
    <option value="orderby=date&order=asc">Oldest</option>
    <option value="orderby=title&order=asc">Title Asc</option>
    <option value="orderby=title&order=dsc">Title Desc</option>
    <option value="orderby=comment_count&order=dsc">Most Comments</option>
    <option value="orderby=comment_count&order=asc">Least Comments</option>

</select>

<script type="text/javascript">

<?php if (( $_GET['orderby'] == 'date') && ( $_GET['order'] == 'dsc')) { ?>
    document.getElementById('sortbox').value='orderby=date&order=dsc';
<?php } elseif (( $_GET['orderby'] == 'date') && ( $_GET['order'] == 'asc')) { ?>
    document.getElementById('sortbox').value='orderby=date&order=asc';
<?php } elseif (( $_GET['orderby'] == 'title') && ( $_GET['order'] == 'asc')) { ?>
    document.getElementById('sortbox').value='orderby=title&order=asc';
<?php } elseif (( $_GET['orderby'] == 'title') && ( $_GET['order'] == 'dsc')) { ?>
    document.getElementById('sortbox').value='orderby=title&order=dsc';
<?php } elseif (( $_GET['orderby'] == 'comment_count') && ( $_GET['order'] == 'dsc')) { ?>
    document.getElementById('sortbox').value='orderby=comment_count&order=dsc';
<?php } elseif (( $_GET['orderby'] == 'comment_count') && ( $_GET['order'] == 'asc')) { ?>
    document.getElementById('sortbox').value='orderby=comment_count&order=asc';
<?php } else { ?>
    document.getElementById('sortbox').value='orderby=date&order=desc';
<?php } ?>

</script>



<div class="gallery-feed">

    <?php
    $currentPage = get_query_var('paged');
    remove_all_filters('posts_orderby');
    $loop = new WP_Query(
        array(
            'post_type' => 'safari_gallery',
            'posts_per_page' => 4,
            'orderby' => 'name',
            'order' => 'ASC',
            'paged' => $currentPage
        )
    ); ?>

    <?php while ($loop->have_posts()):
        $loop->the_post(); ?>

    <div class="fmbottom row">
        <?php get_template_part('template-parts/safari-gallery-card');?>

    </div>

    <?php
    endwhile;
    //wp_reset_postdata();
    echo "<div class='page-nav-container'>" . paginate_links(
        array(
            'prev_text' => __('<'),
            'next_text' => __('>')
        )
    ) . "</div>";
    ?>
    
</div>