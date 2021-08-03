<?php 

function my_excerpt_length($length){
    return 25;    
}

add_filter('excerpt_length' , 'my_excerpt_length', 999);

set_post_thumbnail_size(200, 200);
add_theme_support('post-thumbnails');

//navigation registration
register_nav_menus(array('primary'=>'Primary Menu',
'blue' => 'Blue Menu',
'footer'=>'Footer Menu',
'bbqs'=>'BBQ Menu',
'posts' =>'posts menu',
));

function add_slug_body_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class','add_slug_body_class');


//this will let wordpress know that we're linking to astuteo's jquery.
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );


//widgets
function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Blog', 'jlui_summer_site' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jlui_summer_site' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Sidebar blue', 'jlui_summer_site' ),
        'id'            => 'sidebar-blue',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jlui_summer_site' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar about', 'jlui_summer_site' ),
        'id'            => 'sidebar-about',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jlui_summer_site' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar buy', 'jlui_summer_site' ),
        'id'            => 'sidebar-buy',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'jlui_summer_site' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar footercontent', 'jlui_summer_site' ),
        'id'            => 'sidebar-footercontent',
        'description'   => __( 'Our footer content', 'jlui_summer_site' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}



add_action( 'widgets_init', 'desktop_register_widgets_init' );

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){

	// Get the array of all the shortcodes
	global $shortcode_tags;
	
	$shortcodes = $shortcode_tags;
	
	// sort the shortcodes with alphabetical order
	ksort($shortcodes);
	
	$shortcode_output = "<ul>";
	
	foreach ($shortcodes as $shortcode => $value) {
		$shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
	}
	
	$shortcode_output = $shortcode_output. "</ul>";
	
	return $shortcode_output;

}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');

function legal_disclaimer(){
    return '<small>Disclaimer: All Companies represented in this website are not owned by the creator of this website</small>';
}
add_shortcode('disclaimer', 'legal_disclaimer');

function specials(){
    if(isset($_GET['today'])){
        $today = $_GET['today'];
        
    } else {
        $today = date('l');
    }


switch($today){
    case 'Thursday':
        $content ='Today\'s special is Blue Smoke BBQ if you want to know more 
        about Bluesmoke BBQ click <a href=""> here</a>';
    break;

    case 'Friday':
        $content ='Today\'s special is JJ BBQ if you want to know more 
        about JJ BBQ click <a href=""> here</a>';
    break;

    case 'Saturday':
        $content ='Today\'s special is Pipsqueak BBQ if you want to know more 
        about Pipsqueak BBQ click <a href=""> here</a>';
    break;
    
    
    case 'Sunday':
        $content ='Today\'s special is Pipsqueak BBQ if you want to know more 
        about Pipsqueak BBQ click <a href=""> here</a>';
    break;


    case 'Monday' :
        $content ='Today\'s special is Pipsqueak BBQ if you want to know more 
        about Pipsqueak BBQ click <a href=""> here</a>';
    break;
    
    
    case 'Tuesday' :
        $content ='Today\'s special is Pipsqueak BBQ if you want to know more 
        about Pipsqueak BBQ click <a href=""> here</a>';
    break;

    
    case 'Wednesday' :
        $content ='Today\'s special is Pipsqueak BBQ if you want to know more 
        about Pipsqueak BBQ click <a href=""> here</a>';
    break; 

}
return $content;
}

add_shortcode('today_specials', 'specials');


function today_date(){
    return date("l\, F jS Y");

}

add_shortcode('current_date','today_date');

function year(){
    return date('Y');
}
add_shortcode('current_year', 'year');

remove_filter ('the_content', 'wpautop');
