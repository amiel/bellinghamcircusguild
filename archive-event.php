<?php get_header(); ?>

<header>
  <h1>Events</h1>
</header>

<div class="wrapper">
  <section id="main">

    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <section class="event" id="event_<?php the_ID(); ?>">
        <time><?php the_event_date(); ?></time>
        <?php the_title(); ?>

        <?php the_field('times'); ?>
        <?/*crop*/?>
        <img src="<?php the_field('image'); ?>" />
      </section>
    <?php endwhile; ?>
  </section>
</div>

<?php get_footer(); ?>
