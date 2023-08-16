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

    <section class="popup" id="call-me-back">
      <div class="popup__content">
        <div class="popup__close">
          <span></span>
          <span></span>
        </div>

        <h4 class="popup__title">Feedback</h4>

        <div class="popup__form form">
          <?php echo apply_shortcodes('[contact-form-7 title="Call me back"]'); ?>
        </div>

      </div>
    </section>

    <?php wp_footer() ?>
  </body>
</html> 
