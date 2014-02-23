<?php get_header(); ?>

<header>
  <h1>The Cirquelab</h1>
</header>

<div class="wrapper">
  <section id="main">
    <div id="map"></div>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUV2Nz-_WJgzg1Pi_2oSAuolCY-Ys1yRg
&amp;sensor=false"></script>
  <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/location.js"></script>
  </section>
</div>

<?php get_footer(); ?>
