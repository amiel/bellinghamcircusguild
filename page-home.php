<?php get_header(); ?>
<div class="wrapper">
  <div id="main">

    <section id="mission">
      <h2>Bellingham Circus Guild</h2>
      <p>We are jugglers, acrobats, aerialists, stilters, clowns, myth makers, experimental multi-medium theatricalists, and so very much more.</p>
    </section>

    <?php $event = events_query()->random_post(); ?>
    <?php if ($event) : _loop::load($post = $event); ?>
      <section id="coming-soon" class="alert">
        <h3>Coming Soon</h3>
        <h4>to the Cirque Lab</h4>

        <hr />

        <a href="<?php the_permalink(); ?>">
          <time class="highlight"><?php the_event_date(); ?></time>
          / <span class="description"><?php the_title(); ?></span>
          <img src="<?= bloginfo('stylesheet_directory') ?>/images/arrow-yellow.png" />
        </a>
      </section>
    <?php endif; _loop::reset(); ?>

    <section id="sponsors">
      Thank you to our sponsors:
      <a href="http://www.casaquepasarocks.com/" id="casa-que-pasa" target="_blank">Casa Que Pasa</a>

      <div class="links">
        <a href="/support-us/sponsors/">And many more &#8230;</a>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
