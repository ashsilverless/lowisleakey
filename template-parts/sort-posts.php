<div class="sort-posts">
    <div class="row">
        <p>Sort</p>
        <div class="select-wrapper">
            <select name="sort-posts" id="sortbox"
                onchange="document.location.href='?=<?php the_search_query(); ?>&'+this.options[this.selectedIndex].value;">
                <option value="orderby=date&order=dsc">Newest</option>
                <option value="orderby=date&order=asc">Oldest</option>
                <option value="orderby=title&order=asc">Title A - Z</option>
                <option value="orderby=title&order=dsc">Title Z - A</option>
            </select>
        </div>
    </div>
</div>

</div>
<script type="text/javascript">
<?php if (($_GET['orderby'] == 'date') && ($_GET['order'] == 'dsc')) { ?>
document.getElementById('sortbox').value = 'orderby=date&order=dsc';
<?php } elseif (($_GET['orderby'] == 'date') && ($_GET['order'] == 'asc')) { ?>
document.getElementById('sortbox').value = 'orderby=date&order=asc';
<?php } elseif (($_GET['orderby'] == 'title') && ($_GET['order'] == 'asc')) { ?>
document.getElementById('sortbox').value = 'orderby=title&order=asc';
<?php } elseif (($_GET['orderby'] == 'title') && ($_GET['order'] == 'dsc')) { ?>
document.getElementById('sortbox').value = 'orderby=title&order=dsc';
<?php } elseif (($_GET['orderby'] == 'comment_count') && ($_GET['order'] == 'dsc')) { ?>
document.getElementById('sortbox').value = 'orderby=comment_count&order=dsc';
<?php } elseif (($_GET['orderby'] == 'comment_count') && ($_GET['order'] == 'asc')) { ?>
document.getElementById('sortbox').value = 'orderby=comment_count&order=asc';
<?php } else { ?>
document.getElementById('sortbox').value = 'orderby=date&order=desc';
<?php } ?>
</script>