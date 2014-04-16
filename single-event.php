<?php title("Event Details"); ?>
<?php get_header(); ?>

<?php if (have_posts()) while (have_posts()) : the_post(); ?>
  <div class="wrapper">
    <section id="main">

      <h1><?php the_title(); ?></h1>

      <h2>
        <time class="dates"><?php the_event_date(); ?></time>
        <time class="times"><?php the_field('times'); ?></time>
      </h2>

      <dl>
        <dt>Location:</dt>
        <dd>
          <a href="<?php the_field('google_maps_link'); ?>">
            <?php the_field('location'); ?>
          </a>
        </dd>

        <dt>Tickets:</dt>
        <dd>
          <?php the_field('tickets_description'); ?> /
          <a href="<?php the_field('tickets_link'); ?>">Get tickets<a/>
        </dd>

        <dt>Facebook Event:</dt>
        <dd>
          <a href="<?php the_field('facebook_event_page_link'); ?>">
            <?php the_field('facebook_event_page_link'); ?>
          </a>
        </dd>

        <dt>Contact:</dt>
        <dd><?php the_field('event_contact'); ?></dd>
      </dl>

      <?php $image = new VernacularImage(get_field('image')); ?>
      <img src="<?php echo $image->crop(600, 400, false); ?>" />
      <p class="description">
        <?php the_field('description'); ?>
      </p>
    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
