<?php get_header(); ?>

<?php
$home = esc_url( home_url('/'));
$news = esc_url( home_url('news'));
$content = esc_url( home_url('content'));
$works = esc_url( home_url('works'));
$overview = esc_url( home_url('overview'));
$blog = esc_url( home_url('blog'));
$contact = esc_url( home_url('contact'));
?>

<div class="page-top">
    <a class="arrow-top" href="#"></a>
</div><!-- /.page-top -->

<div class="main-view">
    <div class="main-view__swiper swiper-container">
        <div class="swiper-wrapper">
            <!-- 背景画像１ -->
            <div class="swiper-slide">
                <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv_1.png" alt="">
            </div>
            <!-- 背景画像２ -->
            <div class="swiper-slide">
                <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv_2.png" alt="">
            </div>
            <!-- 背景画像３ -->
            <div class="swiper-slide">
                <img class="swiper-img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv_3.png" alt="">
            </div>
        </div>
        <div class="main-view__text-block">
            <h2 class="main-view__title">清水インテック株式会社</h2><!-- /.main__title -->
            <p class="main-view__subtitle">ネクストイノベーションを目指して</p><!-- /.main__subtitle -->
        </div><!-- /.main-view__text-block -->
    </div>
</div><!-- /.main -->

<?php
$top_news_query = new WP_Query(
	array(
		'post_type'      => 'post',//投稿タイプ
		'posts_per_page' => 1,//投稿表示数
	)
);
?>


<?php if ( $top_news_query->have_posts() ) : ?>
	<?php while ( $top_news_query->have_posts() ) : ?>
		<?php $top_news_query->the_post(); ?>

    <section id="news" class="news top-news">
    <div class="news__inner inner">
        <div class="news__meta">
            <time datetime="2022-07-21" class="news__date"><?php the_time('Y.m.d');?></time><!-- /.news -->
            <h3 class="news__category"><span>お知らせ</span></h3><!-- /.news__category -->
        </div><!-- /.news__meta -->
        <div class="news__link">
            <a href="<?php the_permalink();?>" class="news__text"><?php the_title();?></a><!-- /.news__content__link__text -->
            </div><!-- /.news__category -->
                <div class="news__button">
                <a href="<?php echo $news ?>" class="button button--news">
                    <span>すべて見る</span>
                </a><!-- /.button -->
        </div>
        </div><!-- /.news-inner -->
</section><!-- /.news -->
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>


<section id="content" class="content top-content">
      <div class="content__header section-header">
        <div class="section-header__inner inner">
          <h2 class="section-header__title">事業内容</h2><!-- /.content__title -->
          <p class="section-header__subtitle section-header__subtitle--content">Content</p>
        </div><!-- /.section-header__inner -->
      </div><!-- /.content-header -->
      <div class="content__items">  
        <a href="<?php echo $content ?>" class="content__item">
          <picture>
            <source  class="content__img" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common//content_1_pc.jpg" media="(min-width: 768px)" alt="contentの画像1"><!-- 幅768px以上なら表示 -->
            <img  class="content__img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/content_1.jpg" alt="contentのpc画像1">
          </picture>
          <span class="content__text content__text--first">経営理念ページへ</span><!-- /.content__item__text -->
        </a><!-- /.content__item -->
        <a href="<?php echo $content ?>" class="content__item">
          <picture>
            <source  class="content__img" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content_2_pc.jpg" media="(min-width: 768px)" alt="contentの画像2"><!-- 幅768px以上なら表示 -->
            <img  class="content__img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/content_2.jpg" alt="contentのpc画像2">
          </picture>
          <span class="content__text">理念1へ</span><!-- /.content__item__text -->
        </a><!-- /.content__item -->
        <a href="<?php echo $content ?>" class="content__item">
          <picture>
            <source  class="content__img" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content_3_pc.jpg" media="(min-width: 768px)" alt="contentの画像3"><!-- 幅768px以上なら表示 -->
            <img  class="content__img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/content_3.jpg" alt="contentのpc画像3">
          </picture>
          <span class="content__text">理念2へ</span><!-- /.content__item__text -->
        </a><!-- /.content__item -->
        <a href="<?php echo $content ?>" class="content__item">
          <picture>
            <source  class="content__img" srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content_4_pc.jpg" media="(min-width: 768px)" alt="contentの画像4"><!-- 幅768px以上なら表示 -->
            <img  class="content__img" src="<?php echo get_template_directory_uri() ?>/assets/images/common/content_4.jpg" alt="contentのpc画像4">
          </picture>
          <span class="content__text">理念3へ</span><!-- /.content__item__text -->
        </a><!-- /.content__item -->
      </div><!-- /.content__items -->
    </section><!-- /.content -->

    <section id="works" class="works top-works">
      <div class="works__inner">
        <div class="works__header section-header">
          <div class="section-header__inner inner">
            <p class="section-header__title section-header__title--works">制作実績</p>
            <h2 class="section-header__subtitle section-header__subtitle--works">Works</h2>
          </div><!-- /.section-header__inner -->
        </div><!-- /.content-header -->
        <div class="works__body">
          <div class="works__images">
            <div class="swiper js-works-swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide works__img">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/works_1.jpg" alt="" />
                </div>
                <div class="swiper-slide works__img">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/works_2.jpg" alt="" />
                </div>
                <div class="swiper-slide works__img">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/works_3.jpg" alt="" />
                </div>
              </div>
            </div>
            <div class="swiper-pagination js-works-pagenation"></div>
          </div><!-- /.works__images -->

          <div class="works__article article">
            <div class="article__inner">
              <h3 class="article__title article__title--works">メインタイトルが入ります<span class="u-mobile">。</span></h3><!-- /.article__title -->
              <p class="article__text article__text--works">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.article__text -->
              <div class="article__button article__button--works">
                <a href="<?php echo $works?>" class="button">
                  <span>詳しく見る</span>
                </a><!-- /.button -->
              </div>
            </div><!-- /.article__inner -->
          </div><!-- /.article -->
        </div><!-- /.works__body -->
      </div><!-- /.works__inner -->
    </section><!-- /.works -->

    <section id="overview" class="overview top-overview">
      <div class="overview__header section-header">
        <div class="section-header__inner inner">
          <p class="section-header__title section-header__title--overview">企業概要</p>
          <h2 class="section-header__subtitle section-header__subtitle--overview">Overview</h2>
        </div><!-- /.section-header__inner -->
      </div>
      <div class="overview__body">
        <div class="overview__img">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/overview.jpg" alt="" />
        </div><!-- /.overview__img -->
        <div class="overview__article article">
          <div class="article__inner">
            <h3 class="article__title article__title--overview">メインタイトルが入ります<span class="u-mobile">。</span></h3><!-- /.article__title -->
            <p class="article__text article__text--overview">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.article__text -->
            <div class="article__button article__button--overview">
              <a href="<?php echo $overview ?>" class="button button--overview">
                <span>詳しく見る</span>
              </a><!-- /.button -->
            </div>
          </div><!-- /.article__inner -->
        </div><!-- /.article -->
      </div><!-- /.overview__inner -->
    </section><!-- /.overview -->

    <section id="blog" class="blog top-blog">
      <div class="blog__inner inner">
        <div class="blog__header section-header">
          <div class="section-header__inner inner">
            <p class="section-header__title section-header__title--blog">ブログ</p>
            <h2 class="section-header__subtitle section-header__subtitle--blog">Blog</h2>
          </div><!-- /.section-header__inner -->
        </div>


<div class="blog__cards cards">


        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $taxonomy_slug = 'category1'; // カスタムタクソノミーのスラッグを指定
        $post_type_slug = 'blog'; // 投稿タイプのスラッグを指定
        $terms = get_terms($taxonomy_slug); // タームを取得
        ?>





<?php foreach ( $terms as $value ) : ?>
<?php
$term_slug = $value->slug;
$args = array(
'paged'=>$paged,
'post_type' => $post_type_slug,
$taxonomy_slug => $term_slug,
'posts_per_page' => 3,
'order' => 'DESC',
'orderby' => 'date',
'post_status' => 'publish'
);
$myquery = new WP_Query( $args );
?>
    <div class="panel__list<?php if( $value === reset($terms) ) : ?> is-show<?php endif; ?>">
        <div class="cards">
            <?php if ( $myquery->have_posts()): ?>
            <?php while($myquery->have_posts()): $myquery->the_post(); ?>
            



            <a href="<?php the_permalink();?>" class="cards__item card">
    <div class="card__img">
        <?php the_post_thumbnail('thumbnail'); ?>
    </div><!-- /.card__img -->
    <div class="card__body">
                <div class="card__text-block">
                        <h3 class="card__title"><?php the_title(); ?></h3><!-- /.card__title -->
                        <p class="card__text"><?php the_content(); ?></p><!-- /.card__text -->
                </div><!-- /.card__text-block -->
    </div><!-- /.card__body -->
    <div class="card__meta">
        <p class="card__category"><?php
    if ($terms = get_the_terms($post->ID, 'category1')) {
    foreach ( $terms as $term ) {
    echo esc_html($term->name);
    }
    }
    ?></p><!-- /.card__category -->
        <time datetime="2022-07-21" class="card__date"><?php the_time('Y.m.d')?></time><!-- /.news -->
    </div><!-- /.card__meta -->
</a><!-- /.card -->




            <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
        <?php endforeach; ?>


</div>











  
        <div class="blog__button">
          <a href="<?php echo $blog ?>" class="button">
            <span>詳しく見る</span>
          </a><!-- /.c-button -->
        </div>
      </div>
    </section><!-- /.blog -->
    <section id="contact" class="contact top-contact">
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