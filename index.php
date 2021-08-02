<?php get_header(); ?>
<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/hot-dog-ketchup-mustard-isolated-white-background-hot-dog-ketchup-mustard-white-112613744.jpg">

</div>
<div class="wrapper">
<main>

<?php if(have_posts()):?>
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
<?php getsidebar(); ?>


</div>
<!-- end wrapper -->

<?php get_footer(); ?>
