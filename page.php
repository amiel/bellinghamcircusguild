<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>

  <section id="main">
    <?php the_content(); ?>
  </section>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
