<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <div class="user-content">
        <?php the_content(); ?>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('body-image'); ?>
      <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
