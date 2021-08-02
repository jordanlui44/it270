<?php get_header(); ?>
<div id="search-error">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/lost-sad-man-center-maze-d-illsuatration-51222661.jpg">
</div>

<div class="wrapper">
<main>

<?php if(have_posts()):?>
    <h1 class="page-title">
<?php _e( 'Search results for: ', 'site1' ); ?>
<span class="page-description"><?php echo get_search_query(); ?>
</span>
</h1>

<h2 class="pagetitle">Our findings for 
    <?php /* Search Count */ 
    $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></h2>
<?php while(have_posts()): the_post() ;?>


<article class="post">



<h2> <a href="
<?php the_permalink() ; ?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span>Posted by: <?php the_author(); ?> </span>
<span>Posted on: <?php the_time('F j, Y g:i a');?></span>

</div>
<!-- End of Meta -->
<div class="thumbnail">
<?php if(has_post_thumbnail()) : ?>
<a href ="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?> </a>
<?php endif;?>
</div>
<!-- end the thumbnail -->

<?php the_excerpt();?>
<span class="block">

<a href="<?php the_permalink(); ?>">Read More</a>
</span>
</article>
<?php endwhile; ?>  

<?php else: ?>
    
<?php echo'<h2>Search Results:</h2>
<p>Sorry, but nothing matched your search terms. <br>
would you like to search again with different keywords?</p>';?>
<?php get_search_form(); ?>
<?php endif; ?>
<!-- the search results originally is working off of the index.php page-->
</main>
<aside>

</aside>

</div>
<!-- end wrapper -->

<?php get_footer(); ?>
