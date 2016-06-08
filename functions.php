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

//SEO-friendly title-fetching function
function get_my_title_tag() {
    
    global $post;
    
    if ( is_front_page() ) {  // for site’s Front Page
    
        bloginfo('description'); // retrieve the site tagline
    
    } 
    
    elseif ( is_page() || is_single() ) { // for your site’s Pages or Postings
    
        the_title(); // retrieve the page or posting title 
    
    } 

    else { // for everything else
        
        bloginfo('description'); // retrieve the site tagline
        
    }
    
    if ( $post->post_parent ) { // for your site’s Parent Pages
    
        echo ' | '; // separator with spaces
        echo get_the_title($post->post_parent); // retrieve the parent page title
        
    }

    echo ' | '; // separator with spaces
    bloginfo('name'); // retrieve the site name
	//commenting out the location part because that isn't relevant to this site
    //echo ' | '; // separator with spaces
    //echo 'Seattle, WA.'; // write in the location
    
}
//
    

function get_flexslider() {
	
	echo '<div class="flexslider">';
	echo '<ul class="slides">';
?>