<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>
<body <?php body_class();?>>
<header>
<!-- navbar -->
<nav class="navbar navbar-expand-md">
    <div class="container">
        <a href="<?php echo home_url(); ?>" class="navbar-brand ungu font-weight-bold"><?php bloginfo('name'); ?><!-- show site title --></a>
        <button type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                    ),
                );
            ?>
            <!-- <ul class="navbar-nav ml-auto">
                <li class="nav-item nav-link text-uppercase text-dark font-weight-bold"><a href="#" class="">Artikel</a></li>
                <li class="nav-item nav-link text-uppercase text-dark font-weight-bold"><a href="#" class="">Kegiatan</a></li>
                <li class="nav-item nav-link text-uppercase text-dark font-weight-bold"><a href="#" class="">Galeri</a></li>
                <li class="nav-item nav-link text-uppercase text-dark font-weight-bold"><a href="#" class="">Kuliah di Malaysia</a></li>
                <li class="nav-item nav-link text-uppercase text-dark font-weight-bold"><a href="#" class="">Kontak</a></li>
            </ul> -->
        </div>
    </div>
</nav>
</header>

