<div class="containter">
    <header class="content-header">
    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" style="" alt="...">
        <div class="meta mb-3"><span class="date"><?php the_date(); ?></span>
        <?php
        the_tags('<span class="tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>');
        ?>

            <span class="comment"><a href="#comments"><i class='fa fa-comment'></i><?php comments_number(); ?></a></span>
        </div>
    </header>



<?php
the_content();
?>
</div>