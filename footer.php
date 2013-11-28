  <footer class="page">
    <nav>
      <?php wp_nav_menu(array('container_class' => 'menu', 'theme_location' => 'footer-menu', 'depth' => 1)); ?>
    </nav>

    <section id="sub-footer">
      <div class="container">
        <address class="vcard">
          <span class="adr">
            <span class="street-address">1401 6th Street, Suite 102</span>,
            <span class="locality">Bellingham</span>,
            <span class="region">WA</span>,
            <span class="postal-code">98225</span>
          </span>
        </address>

        <div class="directions">
          <a href="">Get Directions</a>
        </div>

        <div class="social">
          <a href="https://twitter.com/bhamcircus" class="twitter">@bhamcircus</a>
          <a href="https://www.facebook.com/pages/Bellingham-Circus-Guild/125153415065" class="facebook">Facebook</a>
          <a href="mailto:info@bellinghamcircusguild.com" class="email">info@bellinghamcircusguild.com</a>
        </div>

        <div class="copyright">
          <span>&copy;Copyright 2013, Bellingham Circus Guild</span>
        </div>
      </div>
    </section>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
