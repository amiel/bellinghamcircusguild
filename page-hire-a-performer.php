<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <header>
    <h1><?php the_title(); ?></h1>
  </header>

  <div class="wrapper">
    <section id="main">
      <?php the_content(); ?>
    </section>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
