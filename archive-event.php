<?php get_header(); ?>

<header>
  <h1>Events</h1>
</header>

<div class="wrapper">
  <section id="main">

    <section class="event" id="vaudevillingham">
      <h2>Vaudevillingham</h2>
      <div class="times">9PM &amp; 7 PM on the 15th of every month</times>
    </section>

    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <section class="event" id="event_<?php the_ID(); ?>">
        <?php the_event_date(); ?>

        <?php $image = new VernacularImage(get_field('image')); ?>
        <img src="<?php echo $image->crop(240, 240); ?>" />

        <div class="info">
          <h3>
            <?php the_title(); ?>
            <img src="<?= bloginfo('stylesheet_directory') ?>/images/arrow-blue.png" />
          </h3>

          <div class="times">
            <?php the_field('times'); ?>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  </section>
</div>

<?php get_footer(); ?>
