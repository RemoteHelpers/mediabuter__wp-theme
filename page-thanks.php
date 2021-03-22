<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank you</title>
  <!-- <link rel="stylesheet" href="./css/normalize.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/media.css"> -->

  <?php wp_head(); ?>
</head>
<body>
  <div class="thanks-content-wrapper">
    <img class="thanks-pic" src="<?php the_field('thanks-pic') ?>" alt="">
    <img class="thanks-pic-mob" src="<?php the_field('thanks-pic-mob') ?>" alt="">
    <div class="wave-inner wave-inner--thanks">
      <header class="thanks-header" id="thanks">
        <div class="container">
          <nav class="nav">
            <div class="logo-holder"><img src="<?php bloginfo( template_url ); ?>/assets/img/desktop/logo.svg" alt=""></div>
            <div class="nav__list-holder">
              <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="http://mediabuyer/#expec">О вакансии</a></li>
                <li class="nav__item"><a class="nav__link" href="http://mediabuyer/#cond">О компании</a></li>
                <li class="nav__item"><a class="nav__link button" href="http://mediabuyer/#form">Отправить заявку</a></li>
              </ul>
            </div>
            <div class="menu-icon-wrapper">
              <div class="menu-icon"></div>
            </div>
          </nav>
          <div class="thanks-content">
            <h1 class="thanks-content__title"><?php the_field('thanks-content__title') ?></h1>
            <p class="thanks-content__text"><?php the_field('thanks-content__text') ?></p>
            <a href="http://mediabuyer/" class="thanks-content__link button button--arrow-left">Назад</a>
          </div>
        </div>
      </header>
    </div>
    <?php get_footer(); ?>