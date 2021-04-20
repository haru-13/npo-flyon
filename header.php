<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (is_home()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php elseif (is_page('first')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/first-style.css">
  <?php elseif (is_page('question')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/question-style.css">
  <?php elseif (is_page('development')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/development-style.css">
  <?php elseif (is_page('learning-support')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/leaning-support-style.css">
  <?php elseif (is_page('support')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/support-style.css">
  <?php elseif (is_page('media')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media-style.css">
  <?php elseif (is_page('vision')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vision-style.css">
  <?php elseif (is_page('participation')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/participation-style.css">
  <?php elseif (is_page('info')) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/info-style.css">
  <?php elseif (is_single()) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single-style.css">
  <?php endif; ?>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/flyon_logo.png">
  <script src="https://kit.fontawesome.com/6bf7d525e8.js" crossorigin="anonymous"></script>
  <?php
  wp_enqueue_script('jquery');
  wp_enqueue_script('to-top-javascript', get_template_directory_uri() . '/js/to_top.js');
  wp_enqueue_script('ac-javascript', get_template_directory_uri() . '/js/ac.js');
  wp_enqueue_script('main-javascript', get_template_directory_uri() . '/js/main.js');
  wp_head();
  ?>
</head>

<body>
  <header>
    <div class="container1">

      <div class="headericon">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/flyon_top_logo.png" width="150px" alt=""></a>
      </div>
      <!-- list -->
      <div class="dropdown">
        <div class="dropdown__btn" id="dropdown__btn">
          <h1>ふらいおんとは</h1>
        </div>
        <div class="dropdown__body">
          <ul class="dropdown__list">
            <li class="dropdown__item"><a href="<?php echo home_url('first'); ?>" class="dropdown__item-link">初めての方へ</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('vision'); ?>" class="dropdown__item-link">課題と方針</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('info'); ?>" class="dropdown__item-link">団体情報</a></li>
          </ul>
        </div>
      </div>



      <!-- list3 -->
      <div class="dropdown">
        <div class="dropdown__btn" id="dropdown__btn3">
          <h1>活動内容</h1>
        </div>
        <div class="dropdown__body">
          <ul class="dropdown__list">
            <li class="dropdown__item"><a href="https://flyon.jp/" target="_blank" class="dropdown__item-link">無料学習塾</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('development'); ?>" class="dropdown__item-link">IT</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('first'); ?>" class="dropdown__item-link">ブログ</a></li>

            <!-- <li class="dropdown__item"><a href="" class="dropdown__item-link"></a></li> -->
          </ul>
        </div>
      </div>

      <!-- list4  -->
      <div class="dropdown">
        <div class="dropdown__btn" id="dropdown__btn4">
          <h1>お問い合わせ</h1>
        </div>
        <div class="dropdown__body">
          <ul class="dropdown__list">
            <li class="dropdown__item"><a href="<?php echo home_url('support'); ?>" class="dropdown__item-link">寄付</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('participation'); ?>" class="dropdown__item-link">参加</a></li>
            <li class="dropdown__item"><a href="<?php echo home_url('question'); ?>" class="dropdown__item-link">よくある質問</a></li>

            <!-- <li class="dropdown__item"><a href="" class="dropdown__item-link"></a></li> -->
          </ul>
        </div>
      </div>
      <div class="dropdown">
        <a href="<?php echo home_url('support'); ?>" class="dropdown__list support_link">寄付</a>

      </div>
    </div>
  </header>
  <?php if (is_home()) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('question')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('first')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('development')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('learning-support')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('support')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('media')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('vision')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('participation')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php elseif (is_page('info')) : ?>
    <div class="header1">
      <img class="header1img" src="<?php echo get_template_directory_uri(); ?>/img/activities.jpg" alt="">
    </div>
  <?php endif; ?>