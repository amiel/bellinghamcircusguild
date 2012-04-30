<?php
/* index.php is used to display the blog index as well as search results, category or tag archives, and date archives unless you create separate templates
 * for those items (search.php, category.php, tag.php, and archive.php, respectectively)
 * More information: http://codex.wordpress.org/File:Template_Hierarchy.png
 */
?>

<?php get_header(); ?>

<!-- Begin index.php -->

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
    <?php // Output the post title in an <h3> and link it to it's post page using the_permalink(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <?php // Output the date the post was published ?>
    <div class="date"><?php the_date(); ?></div>

    <?php // the_excerpt(); gives a brief version of the_content(); ?>
    <?php the_excerpt(); ?>

    <!-- Begin ul.metadata -->
    <?php // This section of code provides information about the post like category, tags, and number of comments?>
    <ul class="metadata">
      <?php // if the post has categories assigned to it, show them, separated by commas ?>
      <?php if ( count( get_the_category() ) ) : ?>
        <li class="categories">
           Posted under <?php echo get_the_category_list( ', ' ); ?>
        </li>
      <?php endif; ?>

      <?php // if the post has tags, show them separated by commas ?>
      <?php if ( get_the_tag_list( '' ) ): ?>
        <li class="tags">
          Tagged <?php echo get_the_tag_list( '', ', ' ); ?>
        </li>
      <?php endif; ?>

      <?php // if this post has comments enabled, show how many comments there are ?>
      <?php if( comments_open() ): ?>
        <li class="comments">
          <?php comments_popup_link( 'No Comments', 'One Comment', '% Comments' ); ?>
        </li>
      <?php endif; ?>
    </ul>
    <!-- end ul.metadata -->
  </div>
  <!-- End .post -->
<?php endwhile; ?>
<?php // End The Loop ?>

<!-- Begin .pagination -->
<div class="pagination">
  <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <?php next_posts_link( 'Older Posts' ); ?>
      <?php previous_posts_link( 'Newer Posts' ); ?>
  <?php endif; ?>
</div>
<!-- End .pagination -->

</div>
<!-- End #main -->

<?php get_sidebar(); ?>

<!-- End index.php -->

<?php get_footer(); ?>