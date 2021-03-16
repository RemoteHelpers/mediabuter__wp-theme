<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'description' ); ?></title>
  <!-- <link rel="stylesheet" href="./css/normalize.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./css/main.css"> -->
  <!-- <link rel="stylesheet" href="./css/media.css"> -->

  <?php wp_head(); ?>
</head>
<body>
  <header class="header none" id="header">
    <div class="content-wrapper">
      <img class="header__rectangle" src="<?php bloginfo( template_url ); ?>/assets/img/desktop/header-rec.png" alt="">
      <div class="inner">
        <div class="container">
          <nav class="nav">
            <div class="logo-holder"><img src="<?php bloginfo( template_url ); ?>/assets/img/desktop/logo.svg" alt=""></div>
            <div class="nav__list-holder">
              <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="#expec">О вакансии</a></li>
                <li class="nav__item"><a class="nav__link" href="#cond">О компании</a></li>
                <li class="nav__item"><a class="nav__link button" href="#form">Отправить заявку</a></li>
              </ul>
            </div>
            <div class="menu-icon-wrapper">
              <div class="menu-icon"></div>
            </div>
          </nav>
          <div class="header-content">
            <div class="ad">
              <h1 class="ad__title"><?php the_field('ad__title') ?></h1>
              <p class="ad__text"><?php the_field('ad__text') ?></p>
              <a href="#form" class="ad__link button button--arrow">Откликнуться</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="main">
    <section class="charge">
      <div class="container">
        <h2 class="charge__title"><?php the_field('charge__title') ?></h2>
        <ul class="charge__list">
          <li class="charge__item">
            <p class="charge__number">01</p>
            <p class="charge__text"><?php the_field('charge__text-1') ?></p>
          </li>
          <li class="charge__item">
            <p class="charge__number">02</p>
            <p class="charge__text"><?php the_field('charge__text-2') ?></p>
          </li>
        </ul>
      </div>
    </section>
    <section class="req">
      <div class="container container--req">
        <h2 class="req__title"><?php the_field('req__title') ?></h2>
        <div class="req__content">
          <!-- <ul class="req__list"> -->
            <!-- <li class="req__item"> -->
            <?php
              $featured_posts = get_field('req__item');
              if( $featured_posts ): ?>
                  <ul class="req__list">
                  <?php foreach( $featured_posts as $post ): 
                      setup_postdata($post); ?>
                      <li class="req__item">
                        <img src="<?php the_field('req__img') ?>" alt="">
                        <p><?php the_field('req__text') ?></p>
                      </li>
                  <?php endforeach; ?>
                  </ul>
                  <?php 
                  wp_reset_postdata(); ?>
              <?php endif; ?>
              <!-- <img src="./img/desktop/req-icons/new.svg" alt="">
              <p>отсутсвие опыта работы - не проблема</p> -->
            <!-- </li> -->
            <!-- <li class="req__item">
              <img src="./img/desktop/req-icons/en.svg" alt="">
              <p>обязательно знание английского</p>
            </li> -->
            <!-- <li class="req__item">
              <img src="./img/desktop/req-icons/ad.svg" alt="">
              <p>важны коммуникабельность, знания в рекламе и контенте</p>
            </li> -->
          <!-- </ul> -->
          <div class="req__desc">
            <p class="req__text"><?php the_field('req__point-1') ?></p>
            <p class="req__text"><?php the_field('req__point-2') ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="skills">
      <img class="skills__pic" src="<?php the_field('skills__pic') ?>" alt="">
      <img class="skills__pic-mob" src="<?php the_field('skills__pic-mob') ?>" alt="">
      <div class="container">
        <div class="skills__wrapper">
          <h2 class="skills__title"><?php the_field('skills__title') ?></h2>
          <ul class="skills__list">
            <li class="skills__item">
              <div class="skills__number">01</div>
              <p><?php the_field('skill-1') ?></p>
            </li>
            <li class="skills__item">
              <div class="skills__number">02</div>
              <p><?php the_field('skill-2') ?></p>
            </li>
            <li class="skills__item">
              <div class="skills__number">03</div>
              <p><?php the_field('skill-3') ?></p>
            </li>
            <li class="skills__item">
              <div class="skills__number">04</div>
              <p><?php the_field('skill-4') ?></p>
            </li>
            <li class="skills__item">
              <div class="skills__number">05</div>
              <p><?php the_field('skill-5') ?></p>
            </li>
            <li class="skills__item">
              <div class="skills__number">06</div>
              <p><?php the_field('skill-6') ?></p>
            </li>
          </ul>
          <p class="skills__proviso"><?php the_field('skills__proviso') ?></p>
        </div>
      </div>
    </section>
    <section class="expectations" id="expec">
      <img class="expectations__pic" src="<?php the_field('expectations__pic') ?>" alt="">
      <img class="expectations__pic-mob" src="<?php the_field('expectations__pic-mob') ?>" alt="">
      <div class="container">
        <div class="expectations__wrapper">
          <h2 class="expectations__title"><?php the_field('expectations__title') ?></h2>
          <div class="expectations__desc">
            <p class="expectations__text1"><?php the_field('expectations__text1') ?></p>
            <ul class="expectations__list">
              <li class="expectations__item"><?php the_field('expectations__item1') ?></li>
              <li class="expectations__item"><?php the_field('expectations__item2') ?></li>
              <li class="expectations__item"><?php the_field('expectations__item3') ?></li>
            </ul>
            <p class="expectations__text2"><?php the_field('expectations__text2') ?></p>
            <div class="expectations__proviso">
              <img src="<?php bloginfo( template_url ); ?>/assets/img/desktop/arrow-big.png" alt="">
              <p><?php the_field('expectations__proviso') ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="conditions" id="cond">
      <div class="container container--cond">
        <div class="conditions__wrapper">
          <div class="conditions__desc">
            <h2 class="conditions__title"><?php the_field('conditions__title') ?></h2>
            <p class="conditions__text"><?php the_field('conditions__text1') ?></p>
            <p class="conditions__text"><?php the_field('conditions__text2') ?></p>
          </div>
          <conditions__list-wrapper>
            <h2 class="conditions__title conditions__title--mob"><?php the_field('conditions__title') ?></h2>
            <ul class="conditions__list">
              <li class="conditions__item">
                <img src="<?php the_field('conditions__img1') ?>" alt="">
                <p class="conditions__point"><span class="conditions__number">01</span><br><?php the_field('conditions__point1') ?></p>
              </li>
              <li class="conditions__item">
                <img src="<?php the_field('conditions__img2') ?>" alt="">
                <p class="conditions__point"><span class="conditions__number">02</span><br><?php the_field('conditions__point2') ?></p>
              </li>
              <li class="conditions__item">
                <img src="<?php the_field('conditions__img3') ?>" alt="">
                <p class="conditions__point"><span class="conditions__number">03</span><br><?php the_field('conditions__point3') ?></p>
              </li>
            </ul>
          </conditions__list-wrapper>
        </div>
      </div>
    </section>
    <section class="response" id="form">
      <img class="response__pic" src="<?php the_field('response__pic') ?>" alt="">
      <img class="response__pic-mob" src="<?php the_field('response__pic-mob') ?>" alt="">
      <div class="wave-inner">
        <div class="container container--resp">
          <div class="response__wrapper">
            <div class="content-holder">
            <h2 class="response__title"><?php the_field('response__title') ?></h2>
              <p class="response__text"><?php the_field('response__text') ?></p>
              <form class="response__form">
                <p class="response__input">
                  <label for="name">Имя</label>
                  <input type="text" id="name">
                </p>
                <p class="response__input">
                  <label for="tel">Телефон/Viber</label>
                  <input type="text" id="tel">
                </p>
                <p class="response__input">
                  <label for="email">Email</label>
                  <input type="text" id="email">
                </p>
                <a href="thanks.html" class="ad__link button button--arrow">Откликнуться</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  <?php get_footer(); ?>
  
