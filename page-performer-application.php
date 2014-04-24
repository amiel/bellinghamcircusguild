<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <div class="user-content">
        <?php the_content(); ?>
      </div>

      <iframe src="https://docs.google.com/spreadsheet/embeddedform?formkey=dGpjSzM1ak45VXZYNkVuLXRscVc0aHc6MQ" width="600" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading&#8230;</iframe>

    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
