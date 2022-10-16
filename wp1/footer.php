        <footer class="footer">
            <div class="footer__inner">
                <div class="footer__title">
                <a href="<?php echo $home ?>" class="footer__logo">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/CodeUps.svg" alt="" /> 
                </a><!-- /.footer__logo -->
                </div><!-- /.footer__logo -->
                    <nav class="footer__nav footer-pc-nav">


<?php
$defaults = array(
    'theme_location'  => 'pc-footer',
    'add_li_class'    => 'footer-pc-nav__item',
      // 'menu'            => '',
      'menu_class'      => 'footer-pc-nav__items',
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




                <!-- <ul class="footer-pc-nav__items">
                    <li class="footer-pc-nav__item u-mobile">
                    <a href="#">トップ</a>
                    </li>
                    <li class="footer-pc-nav__item">
                    <a href="#news">お知らせ</a>
                    </li>
                    <li class="footer-pc-nav__item">
                    <a href="#content">事業内容</a>
                    </li>
                    <li class="footer-pc-nav__item u-desktop">
                    <a href="#works">制作実績</a>
                    </li>
                    <li class="footer-pc-nav__item">
                    <a href="#overview">企業概要</a>
                    </li>
                    <li class="footer-pc-nav__item u-mobile">
                    <a href="blog.html">ブログ</a>
                    </li>
                    <li class="footer-pc-nav__item u-desktop">
                    <a href="">自社メディア</a>
                    </li>
                    <li class="footer-pc-nav__item">
                    <a href="#contact">お問い合わせ</a>
                    </li>
                </ul> -->

                </nav><!-- /.footer__nav -->

                <nav class="footer__nav footer-sp-nav">


                <?php
$defaults = array(
    'theme_location'  => 'sp-footer',
    'add_li_class'    => 'footer-sp-nav__item',
      // 'menu'            => '',
      'menu_class'      => 'footer-sp-nav__items',
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


                </nav>
            </div><!-- /.footer__inner -->
            <div class="footer__copy-right">
                <p>&copy; 2021 CodeUps Inc.</p>
            </div><!-- /.footer__copy-right -->
            </footer><!-- /.footer -->
        <?php wp_footer(); ?>
    </body>
</html>