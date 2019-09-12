<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">
      
      <div class="header__inner">

        <a href="<?php echo home_url( '/' ); ?>" class="logo header__logo">
          <img src="<?php echo THEME_URL; ?>/images/general/logo.png" alt="Mitra Clinic">
        </a>

        <nav class="nav header__nav">
          <button type="button" class="nav__close"></button>

          <span class="nav__title">Меню</span>

          <ul class="nav-list">
            <li class="nav-list__item">
              <a href="#about">Что это такое</a>
            </li>
            <li class="nav-list__item">
              <a href="#storage">Из чего состоит</a>
            </li>
            <li class="nav-list__item">
              <a href="#consultation">Диагностика и консультирование</a>
            </li>
            <li class="nav-list__item">
              <a href="#steps">Индивидуальная программа</a>
            </li>
            <li class="nav-list__item">
              <a href="#portfolio">Результат</a>
            </li>
            <li class="nav-list__item">
              <a href="#methods">Наши методы</a>
            </li>
            <li class="nav-list__item">
              <a href="#teams">Наши сотрудники</a>
            </li>
          </ul>
        </nav>
        <div class="nav-overlay"></div>
        
        <div class="phone header__phone">
          <?php if (get_field( 'phone_1', 'option' )): ?>
            <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field( 'phone_1', 'option' ) ); ?>" class="phone__tel"><?php the_field( 'phone_1', 'option' ); ?></a>
          <?php endif; ?>

          <?php if (get_field( 'phone_2', 'option' )): ?>
            <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', get_field( 'phone_2', 'option' ) ); ?>" class="phone__tel"><?php the_field( 'phone_2', 'option' ); ?></a>
          <?php endif; ?>
        </div>

        <button type="button" class="nav-toggle">
          <span class="nav-toggle__line"></span>
        </button>
        
      </div>

    </div>
  </header><!-- /.header-->

  <div class="content">