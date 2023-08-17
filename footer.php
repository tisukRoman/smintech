    <footer id="footer" class="footer">
      <div class="footer__container">

        <div class="footer__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.svg" alt="smintech logo" />
        </div>

        <div class="footer__content-box">
          <div class="footer__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-contact.svg" alt="smintech contact" />
          </div>
          <div class="footer__text">
            <div class="footer__title">
              Contacts
            </div>
            <div class="footer__info">
              <p>Email ID: <a href="mailto:reachus@smincomposites.com">reachus@smincomposites.com</a></p>
              <p>Phone: <a href="tel:+919667319696">+91 9667319696</a></p>
            </div>
          </div>
        </div>

        <div class="footer__content-box">
          <div class="footer__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-location.svg" alt="smintech location" />
          </div>
          <div class="footer__text">
            <div class="footer__title">
              Corporate Office:
            </div>
            <div class="footer__info">
              <p>501 & 501A, Salcon Rasvilas, District Centre, Saket, New Delhi, Delhi 110017</p>            
            </div>
          </div>
        </div>

      </div>
    </footer>

    <div class="copyright">
      <div class="copyright__container">
        <div class="copyright__mark">(C) 2023 SMIN Composite Tech Pvt. Ltd.</div>
      </div>
    </div>

    </div> <!-- THE END OF WRAPPER -->

    <?php get_template_part('template-parts/call-me-back'); ?>
    <?php get_template_part('template-parts/learn-more'); ?>

    <?php wp_footer() ?>
  </body>
</html> 
