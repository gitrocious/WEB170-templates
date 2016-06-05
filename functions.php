<?php

/*
Theme Name: Mary's web170 Theme
Author: Mary Delahanty
Author URI: http://snowscapepages.com/
Description: Theme based on romance-author website I designed in web120
Version: 1.0
*/

// Register Menus
register_nav_menus(array(
'main-menu' => __( 'Main' ),
));
//

//Register Sidebar
register_sidebar(array(
'before_widget' => '<div-id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
//

//support thumbnail images with posts
add_theme_support( 'post-thumbnails' ); 

//create page excerpts
add_post_type_support( 'page', 'excerpt');

//
?>