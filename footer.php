    <footer id="footer" class="footer">
      <div class="footer__container">
        <nav class="footer__menu">

          <div class="footer__col">
            <ul>
              <li>Title</li>
              <li><a href="#">Link to other page</a></li>
              <li><a href="#">Link to other page</a></li>
              <li><a href="#">Link to other page</a></li>
            </ul>
          </div>

          <div class="footer__col">
            <ul>
              <li>Title</li>
              <li><a href="#">Link to other page</a></li>
              <li><a href="#">Link to other page</a></li>
              <li><a href="#">Link to other page</a></li>
              <li><a href="#">Link to other page</a></li>
            </ul>
          </div>

          <div class="footer__col">
            <ul>
              <li>Contacts</li>
            </ul>
          </div>

          <div class="footer__col">
            <ul>
              <li>Address</li>
              <li>Россия, Москва, Ленинградское ш., 2Б, стр. 1</li>
            </ul>
          </div>
        </nav>
      </div>
    </footer>

    <div class="copyright">
      <div class="copyright__container">
        <div class="copyright__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="smintech logo" />
        </div>

        <div class="copyright__mark">(C) 2023 SMIN Composite Tech Pvt. Ltd.</div>

        <div class="copyright__policy">
          <a href="#">Privacy policy</a>
          <a href="#">Personal Data Processing Policy</a>
        </div>
      </div>
    </div>

    </div> <!-- THE END OF WRAPPER -->

    <?php get_template_part('template-parts/call-me-back'); ?>
    <?php get_template_part('template-parts/learn-more'); ?>

    <?php wp_footer() ?>
  </body>
</html> 
