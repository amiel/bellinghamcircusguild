<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <?php the_content(); ?>
      &nbsp; <!-- Don't let the float collapse -->
    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
