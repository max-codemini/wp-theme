<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name=”robots” content=”noindex”>
    <!-- meta情報 -->
    <title>CodeUps</title>
    <meta name="description" content="株式会社CodeUpsのホームページです。" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="CodeUps" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://max-log.conohawing.com/max_codeups/" />
    <meta property="og:image" content="images/common/works_1.jpg" />
    <meta property="og:site_name" content="CodeUps" />
    <meta property="og:description" content="株式会社CodeUpsのホームページです。"/>
    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/images/common/favicon.ico"/>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;700&display=swap" rel="stylesheet"/>
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/styles.css"/>
    <!-- JavaScript -->
    <!-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/css/swiper.min.css"/> -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/swiper@4.5.1/dist/js/swiper.min.js"></script> -->
    <!-- <script defer src="<?php echo get_template_directory_uri() ?>../../assets/js/script.js"></script> -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
      <div class="header__inner  header__inner--black">
        <h1 class="header__title">
          <a href="#" class="header__logo">
            <picture>
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps_pc.svg" media="(min-width: 768px)" alt="CodeUps"><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps.svg" alt="CodeUps">
            </picture>
          </a><!-- /.header__logo -->
        </h1><!-- /.header__title -->
        <div class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div><!-- /.header__drawer -->


        <nav class="header__pc-nav pc-nav">


        <?php
$defaults = array(
  'theme_location'  => 'pc-nav',
  'add_li_class'    => 'pc-nav__item',
	// 'menu'            => '',
	'menu_class'      => 'pc-nav__items',
  'depth'           => 0,
	// 'menu_id'         => '{メニューのスラッグ}-{連番}',
	// 'container'       => 'div',
	// 'container_class' => 'menu-{メニューのスラッグ}-container',
	// 'container_id'    => '',
	// 'fallback_cb'     => 'wp_page_menu',
	// 'before'          => '',
	// 'after'           => '',
	// 'link_before'     => '',
	// 'link_after'      => '',
	// 'echo'            => true,
	// 'walker'          => '',
	// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  
);
wp_nav_menu( $defaults );
?>








          <!-- <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a href="news.html">お知らせ</a>
            </li>
            <li class="pc-nav__item">
              <a href="test.html">事業内容</a>
            </li>
            <li class="pc-nav__item">
              <a href="#works">制作実績</a>
            </li>
            <li class="pc-nav__item">
              <a href="#overview">企業概要</a>
            </li>
            <li class="pc-nav__item">
              <a href="blog.html">ブログ</a>
            </li>
            <li class="pc-nav__item">
              <a href="#contact">お問い合わせ</a>
            </li>
          </ul> -->


        </nav><!-- /.p-header__pc-nav -->




        <nav class="header__sp-nav sp-nav js-sp-nav">
        <?php
$defaults = array(
  'theme_location'  => 'sp-nav',
  'add_li_class'    => 'sp-nav__item',
	// 'menu'            => '',
	'menu_class'      => 'sp-nav__items',
  'depth'           => 0,
	// 'menu_id'         => '{メニューのスラッグ}-{連番}',
	// 'container'       => 'div',
	// 'container_class' => 'menu-{メニューのスラッグ}-container',
	// 'container_id'    => '',
	// 'fallback_cb'     => 'wp_page_menu',
	// 'before'          => '',
	// 'after'           => '',
	// 'link_before'     => '',
	// 'link_after'      => '',
	// 'echo'            => true,
	// 'walker'          => '',
	// 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  
);
wp_nav_menu( $defaults );
?>





          <!-- <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('//'));?>">トップ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/news/'));?>">お知らせ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/content/'));?>">事業内容</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/works/'));?>">制作実績</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/overview/'));?>">企業概要</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/blog/'));?>">ブログ</a>
            </li>
            <li class="sp-nav__item">
              <a href="<?php echo esc_url(home_url('/contact/'));?>">お問い合わせ</a>
            </li>
          </ul> -->
        </nav><!-- /.header__sp-nav -->
      </div><!-- /.header__inner -->

    </header><!-- /.header -->
