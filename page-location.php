<?php title(get_the_title()); ?>
<?php get_header(); ?>

  <div class="wrapper">
    <section id="main">

      <?php if (have_posts()) while (have_posts()) : the_post(); ?>
        <div class="user-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>

      <div id="map"></div>

      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUV2Nz-_WJgzg1Pi_2oSAuolCY-Ys1yRg&amp;sensor=false"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/location.js"></script>
    </section>
  </div>

<?php get_footer(); ?>
