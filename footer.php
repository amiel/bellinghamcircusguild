<!-- begin footer.php -->
  </div>
  <!-- end #wrapper -->

  <!-- Begin #footer -->
  <div id="footer">
  <?php // This will output the menu you create and assign to the 'Footer Menu' position in the admin; otherwise, it will output a Home link and links to each top-level page ?>
  <?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'footer-menu', 'depth' => 1 ) ); ?>

  <?php // wp_footer(); allows plugins to insert content into the footer as needed -- similar to wp_head(); ?>
  <?php wp_footer(); ?>
  </div>
  <!-- end #footer -->
</body>
</html>