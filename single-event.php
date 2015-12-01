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
          <?php link_to_the_field('location', 'google_maps_link'); ?>
        </dd>

        <?php if (get_field('tickets_description')) : ?>
          <dt>Tickets:</dt>
          <dd>
            <?php the_field('tickets_description'); ?>
            <?php if (get_field('tickets_link')) : ?>
              / <a href="<?php the_field('tickets_link'); ?>">Get tickets<a/>
            <?php endif; ?>
          </dd>
        <?php endif; ?>

        <?php if (get_field('facebook_event_page_link')) : ?>
          <dt>Facebook Event:</dt>
          <dd>
            <?php link_to_the_field('facebook_event_page_link', 'facebook_event_page_link'); ?>
          </dd>
        <?php endif; ?>

        <?php if (get_field('event_contact')) : ?>
          <dt>Contact:</dt>
          <dd><?php the_field('event_contact'); ?></dd>
        <?php endif; ?>
      </dl>

      <?php if (get_field('image')) : ?>
        <?php $image = new VernacularImage(get_field('image')); ?>
        <img src="<?php echo $image->crop(600, 400, false); ?>" />
      <?php endif; ?>

      <div class="description user-content">
        <?php the_field('description'); ?>
      </div>
    </section>
    <?php get_sidebar(); ?>
  </div>
<?php endwhile; ?>

<?php get_footer(); ?>
