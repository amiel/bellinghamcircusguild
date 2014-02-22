<?php get_header(); ?>

<header>
  <h1>Events</h1>
</header>

<div class="wrapper">
  <section id="main" <?php if (!have_posts()) echo 'class="no-events"'; ?>>

    <section class="event" id="vaudevillingham">
      <div class="placeholder-1"></div>
      <div class="placeholder-2"></div>

      <h2>Vaudevillingham</h2>

      <div class="times">
        9PM <span class="highlight ampersand">&amp;</span> 7 PM
      </div>

      <div class="date">
        on <span class="accent">the</span>
        <span class="highlight large">15th</span>
        <span class="accent small">of</span>
        every month
      </div>
    </section>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="event" id="event_<?php the_ID(); ?>">
          <?php the_event_date(); ?>

          <?php $image = new VernacularImage(get_field('image')); ?>
          <img src="<?php echo $image->crop(240, 320); ?>" />

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
    <?php else : ?>
      NO EVENTS
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?>
