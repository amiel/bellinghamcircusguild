<?php title(get_the_title()); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">

      <h1><?php the_title(); ?></h1>

      <h2>
        <time class="dates">Every month on the 15th</time>
        <time class="times">at 7pm and 9pm</time>
      </h2>

      <dl>
        <dt>Location:</dt>
        <dd><a href="/location">The Cirque Lab</a></dd>

        <dt>Tickets:</dt>
        <dd>At the door</dd>
      </dl>

      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('body-image'); ?>
      <?php endif; ?>

      <div class="description user-content">
        <?php the_content(); ?>
      </div>
    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
