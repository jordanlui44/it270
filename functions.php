<?php 

function my_excerpt_length($length){
    return 25;    
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

//navigation registration
register_nav_menus(array('primary'=>'Primary Menu',
'footer'=>'Footer Menu'
));


//this will let wordpress know that we're linking to astuteo's jquery.
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );