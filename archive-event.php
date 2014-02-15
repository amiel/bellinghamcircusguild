<?php get_header(); ?>

<header>
  <h1>Events</h1>
</header>

<div class="wrapper">
  <section id="main">

    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <section class="event" id="event_<?php the_ID(); ?>">
        <?php date(the_field('start_on')); ?>
        <?php the_field('end_on'); ?>
        <img src="<?php the_field('image'); ?>" />
        <?php the_title(); ?>
        <?php the_field('times'); ?>
        <?/*crop*/?>
      </section>
    <?php endwhile; ?>
  </section>
</div>

<?php get_footer(); ?>
