<?php get_header('black'); ?>




<?php
$home = esc_url( home_url('/'));
$news = esc_url( home_url('news'));
$content = esc_url( home_url('content'));
$works = esc_url( home_url('works'));
$overview = esc_url( home_url('overview'));
$blog = esc_url( home_url('blog'));
$contact = esc_url( home_url('contact'));
?>



<div class="breadcrumb breadcrumb--detail-works">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
</div>







<div class="detail-works">
    <div class="detail-works__inner">
        <div class="detail-works__head detail-head">
                    <h3 class="detail-head__title"><?php the_title(); ?>様<span>制作実績</span></h3><!-- /.detail-head__title -->
                    <div class="detail-head__meta">
                        <p class="detail-head__date"><?php the_time('Y.m.d')?></p><!-- /.detail-head__date -->
                        <p class="detail-head__category"><?php
                    if ($terms = get_the_terms($post->ID, 'category1')) {
                    foreach ( $terms as $term ) {
                    echo esc_html($term->name);
                    }
                    }
                    ?></p><!-- /.detail-head__category -->
                    </div><!-- /.detail-head__meta -->

        </div><!-- /.detail-works__head -->

</div><!-- /.detail-works__inner -->







       














<!-- Slider main container -->
<div class="swiper mySwiper2 sub-mySwiper2">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper mySwiper2__wrapper">
        <!-- Slides -->
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider2.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider3.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider4.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider5.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider6.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider7.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider8.jpg" alt=""></div>
        <div class="swiper-slide mySwiper2__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider9.jpg" alt=""></div>
    </div>
    <!-- 必要に応じてナビボタン -->
    <div class="swiper-button-prev mySwiper2__button-prev"></div>
    <div class="swiper-button-next mySwiper2__button-next"></div>
</div>
<div class="swiper mySwiper sub-mySwiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper mySwiper__wrapper">
    <!-- Slides -->
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider2.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider3.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider4.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider5.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider6.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider7.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider8.jpg" alt=""></div>
    <div class="swiper-slide mySwiper__slide"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider9.jpg" alt=""></div>
  </div>
</div>




























        <div class="detail-works__contents">
            <div class="detail-works__inner">
            <div class="detail-works__content text-point">
                <h3 class="text-point__title">制作のポイント</h3><!-- /.text-point__title -->
                <p class="text-point__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.text-ponit__text -->
            </div><!-- /.text-point -->

            <div class="detail-works__content text-point">
                <h3 class="text-point__title">デザインのポイント</h3><!-- /.text-point__title -->
                <p class="text-point__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.text-ponit__text -->
            </div><!-- /.text-point -->

            <div class="detail-works__content text-point">
                <h3 class="text-point__title">その他</h3><!-- /.text-point__title -->
                <p class="text-point__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.text-ponit__text -->
            </div><!-- /.text-point -->
        </div><!-- /.detail-works__content -->
        </div><!-- /.detail-works__inner -->
</div><!-- /.detail-works -->


<div class="recommend">
    <div class="recommed__inner inner">
        <div class="recommend__title-block">
            <p class="recommend__title">おすすめ記事</p><!-- / -->          
        </div>

        <div class="recommend__items">





        <?php
    $args = [
    'paged'          => $paged, //WP-PageNaviの場合は必ず記載
    'post_type' => 'blog', // カスタム投稿名が「blog」の場合
    'posts_per_page' => 4, // 表示する数
    'orderby' => 'rand'//ランダムで取得
    ];
    $my_query = new WP_Query($args); ?>

    <?php if ($my_query->have_posts()): // 投稿がある場合 ?>
    
    
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- ▽ ループ開始 ▽ -->
    
    <a href="<?php the_permalink();?>" class="recommend__item card">
    <div class="card__img card__img--recommend">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div><!-- /.card__img -->
    <div class="card__body">
                <div class="card__text-block">
                        <h3 class="card__title"><?php the_title(); ?></h3><!-- /.card__title -->
                        <p class="card__text"><?php the_content(); ?></p><!-- /.card__text -->
                </div><!-- /.card__text-block -->
    </div><!-- /.card__body -->
    <div class="card__meta">
        <p class="card__category">
        <?php
$terms = get_the_terms( $post ->ID, 'category1' );
foreach( $terms as $term ) {
    if($term->parent){
    echo $term->name;
    }
}
?>
        </p>
        <time datetime="2022-07-21" class="card__date"><?php the_time('Y.m.d')?></time><!-- /.news -->
    </div><!-- /.card__meta -->
    </a><!-- /.card -->




    <!-- △ ループ終了 △ -->
    <?php endwhile; ?>
    </div><!-- /.archive-works__items -->
    </div><!-- /.archive-works__inner -->
    <?php else: // 投稿がない場合?>
    <p>まだ投稿がありません。</p>
    <?php endif; wp_reset_postdata(); ?>







        </div><!-- /.recommend__items -->



    </div>           
</div><!-- /.recommend -->





<section id="contact" class="contact sub-contact">
        <div class="contact__inner inner">
            <div class="contact__header section-header">
            <div class="section-header__inner">
                <p class="section-header__title">お問い合わせ</p>
                <h2 class="section-header__subtitle section-header__subtitle--contact">Contact</h2>
            </div><!-- /.section-header__inner -->
            </div>
            <div class="contact__body">
                <p class="contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.article__text -->
                <div class="contact__button">
                <a href="<?php echo $contact ?>" class="button button--contact">
                    <span>お問い合わせへ</span>
                </a><!-- /.c-button -->
                </div>
            </div><!-- /.article -->
        </div><!-- /.inner -->
</section><!-- /.contact -->    



<?php get_footer(); ?>

<!-- swiperはindex.htmlにコピー -->



<?php
    if ($terms = get_the_terms($post->ID, 'category1')) {
    foreach ( $terms as $term ) {
    echo esc_html($term->name);
    }
    }
    ?>