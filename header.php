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
        <a href="mailto:gfrp@mail.com" class="header__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.svg" alt="mail icon" />
        </a>
        <a class="header__link" href="mailto:gfrp@mail.com">gfrp@mail.com</a>
      </div>

      <div class="header__contact">
        <a href="tel:+7 (000) 000 00 00" class="header__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="phone icon" />
        </a>
        <a class="header__link" href="tel:+7 (000) 000 00 00">+7 (000) 000 00 00</a>
      </div>
    </div>
  </header>
