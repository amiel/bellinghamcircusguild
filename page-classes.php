<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php $classes = classes(); ?>

<div class="wrapper">
  <section id="main">
    <?php the_content(); ?>
  </section>
</div>

<?php get_footer(); ?>
