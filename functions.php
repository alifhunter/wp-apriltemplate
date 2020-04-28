<?php

//function for wordpress theme support
function april_theme_support(){
    //add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-background' );
}
add_action('after_setup_theme', 'april_theme_support');

//function for wordpress menu
function april_theme_menus(){
    $locations = array(
        'primary' => "Top Right Menu" //ntar di pilih di setting wordpress
    );

    register_nav_menus($locations);
}
add_action('init', 'april_theme_menus');

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
//function for breadcrumb on posts
function get_breadcrumb(){
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

// function for css
function april_register_style(){
    $version = wp_get_theme()->get('Version');
    // function('nama', 'path', 'dependencies', 'version', 'media')
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('fontAwesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'april_register_style');

// function for javascript
function april_register_scripts(){
    wp_deregister_script('jquery'); //deregister jquery bawaan wordpress, klo ngga bisa error
    wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.5.0.min.js", array(), '3.5.0',true);
    wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array(), null,true);
}
add_action('wp_enqueue_scripts', 'april_register_scripts');

?>