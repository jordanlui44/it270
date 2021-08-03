<?php get_header(); 
/* Template name: about page*/
?>
<div id="hero">
<img src="<?php echo get_template_directory_uri();?>/../../uploads/hot-dog-ketchup-mustard-isolated-white-background-hot-dog-ketchup-mustard-white-112613744.jpg">

</div>


<div class="wrapper">
<main>
<?php if(have_posts()):?>

<?php while(have_posts()): the_post() ;?>



<?php the_content();?>
<?php endwhile; ?>

<?php else: ?>
<?php echo wpautop('Sorry, no posts were found'); ?>
<?php endif; ?>
</main>

<aside id="secondary" class ="widget-area">
<?php dynamic_sidebar('sidebar-about'); ?>
</aside>

</div>
<!-- end wrapper -->

<?php get_footer(); ?>
