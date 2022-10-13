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
            <source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-blog_pc.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-blog_sp.jpg" alt="事業内容のSP画像">
        </picture>
    </div>
    <div class="mv-sub__head">
        <h2 class="mv-sub__title">ブログ</h2><!-- /.main__title -->
    </div><!-- /.mv-sub__head -->
</div>

<div class="breadcrumb">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
</div>



<div class="category-block">
            <div class="category-block__inner inner">
                <a href="" class="category-block__item">ALL</a><!-- /.category-link -->
                <a href="" class="category-block__item">カテゴリ１</a><!-- /.category-link -->
                <a href="" class="category-block__item">カテゴリカテゴリ</a><!-- /.category-link -->
                <a href="" class="category-block__item">カテ</a><!-- /.category-link -->
            </div><!-- /.category-block__inner -->            
</div><!-- /.category-link -->




        <section class="card-block">
            <div class="card-block__inner inner">
            <div class="card-block__item cards">
                
            <?php
    $args = [
    'paged'          => $paged, //WP-PageNaviの場合は必ず記載
    'post_type' => 'blog', // カスタム投稿名が「works」の場合
    'posts_per_page' => 9, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
    
    
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- ▽ ループ開始 ▽ -->
    
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




    <!-- △ ループ終了 △ -->
    <?php endwhile; ?>
</div><!-- /.archive-works__items -->
</div><!-- /.archive-works__inner -->
<?php else: // 投稿がない場合?>
    <p>まだ投稿がありません。</p>
<?php endif; wp_reset_postdata(); ?>




            </div>
        </div><!-- /.card-block__inner -->
        </section><!-- /.card-block -->



<div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
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