<?php
get_header();
global $post;
$author_id = $post->post_author;
?>

<div class="jumbotron-fluid bgPost py-5" style="
background: url(<?php 
echo get_the_post_thumbnail_url( $post_id, '' ); ?>) no-repeat !important;
text-shadow: 2px 2px 4px black;
">
    <div class="container">
        <div class="display-5">
            <?php echo the_category('&bull;'); ?>
        </div>
    </div>
</div>

<section class="jumbotron-fluid breadcrumb">
    <div class="container">
        <?php get_breadcrumb(); ?>
    </div>
</section>

<section>
    <div class="container py-3">
            <?php get_template_part('template-parts/content', 'article'); ?> 
    </div>
</section>


<?php 
get_footer(); 
?>