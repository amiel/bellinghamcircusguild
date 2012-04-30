<!-- Begin sidebar.php -->

<!-- Begin #sidebar -->
<div id="sidebar">
  <!-- Begin ul.widgets -->
  <ul class="widgets">

  <?php
  /* If you've placed widgets in the Sidebar widget area in the admin under Appearance, those widgets
   * will appear; otherwise we'll default with some useful information like search and archives
   */
  ?>
  <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
    <li>
      <?php // Show the search form ?>
      <?php get_search_form(); ?>
    </li>

    <li>
      <h4>Archives</h4>
      <ul>
        <?php // Show monthly archives ?>
        <?php wp_get_archives( 'type=monthly' ); ?>
      </ul>
    </li>
  <?php endif; ?>
  </ul>
  <!-- End ul.widgets -->

</div>
<!-- End #sidebar -->

<!-- End sidebar.php -->