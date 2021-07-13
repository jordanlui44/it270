<?php 

function my_excerpt_length($length){
    return 25;    
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

