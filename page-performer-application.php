<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">
      <div class="user-content">
        <?php the_content(); ?>
      </div>

      <iframe src="https://docs.google.com/forms/d/1L4bsvT04cbZCXOf1990CP0SGWmbxi4Q7NbQOqcY-fuw/viewform?embedded=true" width="600" height="900" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>

    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
