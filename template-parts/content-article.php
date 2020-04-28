<?php 
global $post;
$author_id = $post->post_author;
?>
<div class="row">
    <div class="col-md-3 d-none d-lg-block">
        <div class="text-center">
            <img class="rounded-circle" src="<?php echo get_avatar_url($author_id, ['size' => '96']); ?>" alt="">
            <p class="font-weight-bold"><?php echo get_the_author_meta('first_name', $author_id);?> <?php echo get_the_author_meta('last_name', $author_id); ?></p>
            <p class="font-italic"><?php echo get_the_author_meta('description', $author_id); ?></p>
        </div>
    </div>
    <div class="col-md-7">
        <h1 class="ungu"><?php the_title(); ?></h1>
        <p class="text-secondary"><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date('l, j F Y'); ?></time> | <?php echo get_comments_number(); ?> comments</p>
        <?php echo get_post_field('post_content', $post->ID);  ?>
    </div>
    <div class="col-md-2"></div>
</div>
<hr>
<div class="row">
    <div class="col-md-3 d-none d-lg-block">

    </div>
    <div class="col-md-7">
        <?php
            comments_template();
        ?>
    </div>
    <div class="col-md-2"></div>
</div>