<?php get_header(); 
/* Template name: Front page*/
?>
<div id="hero">
 <img src="https://jorlui11.dreamhosters.com/it270/wordpress/wp-content/uploads/Saltlickpit-scaled.jpg" alt="Banner">
</div>

<div class="wrapper">

<?php if(have_posts()):?>

<?php while(have_posts()): the_post() ;?>



<?php the_content();?>
<?php endwhile; ?>

<?php else: ?>
<?php echo wp_autop('Sorry, no posts were found'); ?>
<?php endif; ?>


</div>
<!-- end wrapper -->

<?php get_footer(); ?>
