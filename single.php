<?php get_header(); ?>

<!-- Begin single.php -->

<!-- Begin #main -->
<div id="main">

<?php
/* This starts "the loop", which is how WordPress loops through each post (or page) and displays it
 * More information: http://codex.wordpress.org/The_Loop
 */
?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <!-- Begin .post -->

  <div class="post">
    <h1><?php the_title(); ?></h1>

    <?php // Output the date the post was published ?>
    <div class="date"><?php the_date(); ?></div>

    <?php // the_content(); places the content from the WordPress editor ?>
    <?php the_content(); ?>

    <?php // Loads comments.php and displays comments plus the comment form ?>
    <?php comments_template(); ?>
  </div>
  <!-- End .post -->
<?php endwhile; // end of the loop. ?>

</div>
<!-- End #main -->

<?php get_sidebar(); ?>


<!-- End single.php -->

<?php get_footer(); ?>