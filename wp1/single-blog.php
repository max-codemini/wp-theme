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




<div class="breadcrumb breadcrumb--detail-blog">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
</div>




<div class="detail-blog">
    <div class="detail-blog__head detail-head">
        <div class="detail-head__inner">
            <h3 class="detail-head__title"><?php the_title(); ?></h3><!-- /.detail-head__title -->
            <div class="detail-head__meta">
                <p class="detail-head__date"><?php the_time('Y.m.d')?></p><!-- /.detail-head__date -->
                <p class="detail-head__category"><?php
$terms = get_the_terms( $post ->ID, 'category1' );
foreach( $terms as $term ) {
    if($term->parent){
    echo $term->name;
    }
}
?></p><!-- /.detail-head__category -->
            </div><!-- /.detail-head__meta -->
        </div><!-- /.detail-head__inner -->
    </div><!-- /.detail-blog__head -->


    <div class="detail-blog__inner">
        <div class="detail-blog__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/single-blog1.jpg" alt="事業内容のSP画像">
        </div><!-- /.detail-blog__img -->
        <div class="detail-blog__text-inner">
            <p class="detail-blog__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.detail-blog__text -->
            <h2 class="detail-blog__sub-title detail-blog__sub-title--02">見出し２</h2><!-- /.detail-blog__sub-title -->
            <p class="detail-blog__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.detail-blog__text -->
            <h2 class="detail-blog__sub-title detail-blog__sub-title--03">見出し３</h2><!-- /.detail-blog__sub-title -->
            <p class="detail-blog__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.detail-blog__text -->
        </div><!-- / -->
        <div class="detail-blog__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/single-blog2.jpg" alt="事業内容のSP画像">
        </div><!-- /.detail-blog__img -->
        <div class="detail-blog__text-inner">
        <ul >
            <li class="detail-blog__list">・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">・リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
        </ul>

        <ul>
            <li class="detail-blog__list">1リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">2リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">3リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
            <li class="detail-blog__list">4リストが入ります。リストが入ります。リストが入ります。リストが入ります。</li><!-- /.detail-blog__list -->
        </ul>
        </div><!-- / -->
    </div>
</div><!-- /.detail-blog -->



<div class="detail-pagenavi detail-blog__pagenavi">
    <div class="detail-pagenavi__items">
        <?php previous_post_link('%link', 'PREV'); ?>
        <a href="blog" class="detail-pagenavi__item detail-pagenavi__item--center">一覧</a>
        <?php next_post_link('%link', 'NEXT'); ?>
    </div><!-- /.detail-pagenavi__items -->
</div><!-- /.detail-blog__oagenavi -->





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
        <p class="card__category"><?php
$terms = get_the_terms( $post ->ID, 'category1' );
foreach( $terms as $term ) {
    if($term->parent){
    echo $term->name;
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



<!-- card-blockはindex.htmlにコピー-->