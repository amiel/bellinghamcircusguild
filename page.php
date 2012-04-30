<?php get_header(); ?>

<!-- Begin page.php -->

<!-- Begin #main -->
<div id="main">

<?php
/* This starts "the loop", which is how WordPress loops through each post (or page) and displays it
 * The Loop is required even for pages (even though there's only one of them!)
 * More information: http://codex.wordpress.org/The_Loop
 */
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php // Output the page title in an <h1> ?>
  <h1><?php the_title(); ?></h1>

  <?php // the_content(); places the content from the WordPress editor ?>
  <?php the_content(); ?>

<?php endwhile; ?>
<?php // End The Loop ?>

</div>
<!-- End #main -->

<?php get_sidebar(); ?>

<!-- End page.php -->

<?php get_footer(); ?>