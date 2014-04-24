<?php title("Events"); ?>
<?php get_header(); ?>

<?php $events = events(); ?>

<div class="wrapper">
  <section id="main" <?php if (count($events) == 0) echo 'class="no-events"'; ?>>

    <section class="event" id="vaudevillingham">
      <h2><a href="/about/vaudevillingham">Vaudevillingham</a></h2>

      <div class="times">
        9 PM <span class="highlight ampersand">&amp;</span> 7 PM
      </div>

      <div class="date">
        on <span class="accent">the</span>
        <span class="highlight large">15th</span>
        <span class="accent small">of</span>
        every month
      </div>
    </section>

    <?php if (count($events) > 0) : ?>
      <?php foreach ($events as $post) : _loop::load($post); ?>
        <section class="event" id="event_<?php the_ID(); ?>">
          <?php the_event_date(); ?>

          <?php $image = new VernacularImage(get_field('image')); ?>
          <img src="<?php echo $image->crop(240, 282); ?>" />

          <div class="info">
            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                <span class="arrow">&rarr;</span>
              </a>
            </h3>

            <div class="times">
              <?php the_field('times'); ?>
            </div>
          </div>
        </section>
      <?php endforeach; ?>
    <?php else : ?>
      <section id="no-events" class="alert">
        <h3>Uh Oh!</h3>
        <h4>There are no other upcoming events to display.</h4>

        <hr />

        <a href="/support-us/donate">
          <span class="description">You should donate so we can make even more fun events for you to attend!</span>
          <span class="highlight">DONATE</span>
          <img src="<?= bloginfo('stylesheet_directory') ?>/images/arrow-yellow.png" class="arrow" />
        </a>
      </section>
    <?php endif; ?>
  </section>

</div>

<?php get_footer(); ?>
