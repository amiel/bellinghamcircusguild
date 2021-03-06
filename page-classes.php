<?php title(get_the_title()); ?>
<?php get_header(); ?>

<div class="wrapper">
  <section id="main">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
      <div class="user-content">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>

    <?php $workshops = classes(); ?>

    <?php if (count($workshops) > 0) : ?>
      <?php foreach ($workshops as $post) : _loop::load($post); ?>

        <section class="workshop" id="workshop_<?php the_ID(); ?>">
          <div class="meta">
            <h2><?php the_title(); ?></h2>
            <h3><?php the_field('days'); ?></h2>

            <dl>
              <?php if (get_field('times')) : ?>
                <dt>Times:</dt>
                <dd><?php the_field('times'); ?></dd>
              <?php endif; ?>

              <?php if (get_field('location')) : ?>
                <dt>Location:</dt>
                <dd>
                    <?php link_to_the_field('location', 'location_url'); ?>;
                </dd>
              <?php endif; ?>

              <?php if (get_field('cost')) : ?>
                <dt>Cost:</dt>
                <dd><?php the_field('cost'); ?></dd>
              <?php endif; ?>

              <?php if (get_field('ages')) : ?>
                <dt>Ages:</dt>
                <dd><?php the_field('ages'); ?></dd>
              <?php endif; ?>

              <dt>Instructor:</dt>
              <dd>
                <?php the_instructor_information(); ?>
              </dd>
            </dl>
          </div>

          <div class="description">
            <?php the_field('description'); ?>
          </div>
        </section>

      <?php endforeach; ?>
    <?php endif; ?>
  </section>

  <?php // reload the current post because of all that classes stuff ?>
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <?php get_sidebar('image'); ?>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
