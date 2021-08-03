<?php get_header(); ?>
<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/hot-dog-ketchup-mustard-isolated-white-background-hot-dog-ketchup-mustard-white-112613744.jpg">

</div>

<div class="wrapper">
<main>

<?php if(have_posts()):?>
<?php while(have_posts()): the_post() ;?>

<article class="post">



<h2> 
<a href="<?php the_permalink() ; ?>"><?php the_title() ;?></a></h2>

<div class="meta">
<span><b>Posted by:</b> <?php the_author(); ?> </span>
<span><b>Posted on:</b> <?php the_time('F j, Y g:i a');?></span>

</div>
</article>

<?php the_content();?>
<?php endwhile; ?>  
<?php else: ?>
<?php echo wpautop('Sorry, no posts were found'); ?>
<?php endif; ?>

<span class="next-previous">
<?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
</span>
</main>
<aside id="secondary" class ="widget-area">
<?php dynamic_sidebar('sidebar-blog'); ?>
</aside>
</div>
<!-- end wrapper -->

<?php get_footer(); ?>
