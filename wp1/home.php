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

<div class="mv-sub">
    <div class="mv-sub__img">
        <picture>
            <source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-news_pc.jpg" media="(min-width: 768px)" alt="contentの画像1"><!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-news_sp.jpg" alt="">
        </picture>
    </div>
    
    <div class="mv-sub__head">
        <h2 class="mv-sub__title">お知らせ</h2><!-- /.main__title -->
    </div><!-- /.mv-sub__head -->
</div>

<div class="breadcrumb breadcrumb--news">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>


<section class="news-sub">
    <div class="news-sub__inner inner">
            

    <div class="news-sub__items">


<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>


            <div class="news-sub__item topics">
                <div class="topics__meta">
                    <time datetime="2022-07-21" class="topics__date"><?php the_time('Y.m.d');?></time><!-- /.news -->
                    <h3 class="topics__category"><span>カテゴリ</span></h3><!-- /.news__category -->
                </div><!-- /.topics__meta -->
                <div class="topics__link">
                    <a href="<?php the_permalink();?>" class="topics__text"><?php the_title();?></a><!-- /.news__content__link__text -->
                </div><!-- /.news__category -->
            </div><!-- /.news-sub__item -->

<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の処理 -->
投稿がありません
<?php endif; ?>



        </div><!-- /.news-sub__items -->
    </div><!-- /.news-sub__inner -->
</section><!-- /.news-sub -->

<div class="pagenavi news-pagenavi">
    <?php wp_pagenavi();?>
</div><!-- /.pagenation -->


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
