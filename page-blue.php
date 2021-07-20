<?php get_header(); 
/* Template name: bluesmoke page*/
?>
<div id="wrapper">
<main>
<?php if(have_posts()):?>

<?php while(have_posts()): the_post() ;?>

<h2><?php the_title() ;?></h2>

<?php the_content();?>
<?php endwhile; ?>

<?php else: ?>
<?php echo wpautop('Sorry, no posts were found'); ?>
<?php endif; ?>
</main>
<aside>

</aside>

</div>
<!-- end wrapper -->

<?php get_footer(); ?>
