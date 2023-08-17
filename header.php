<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

  <header id="header" class="header">
    <div class="header__container">
      <div class="header__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="smintech logo" />
      </div>

      <div class="header__contact">
        <a href="mailto:reachus@smincomposites.com" class="header__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="mail icon" />
        </a>
        <a class="header__link" href="mailto:reachus@smincomposites.com">reachus@smincomposites.com</a>
      </div>

      <div class="header__contact">
        <a href="tel:+919667319696" class="header__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="phone icon" />
        </a>
        <a class="header__link" href="tel:+919667319696">+91 9667319696</a>
      </div>

      <div class="mobile-menu-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mobile-menu.svg" />
      </div>
    </div>

  </header>
