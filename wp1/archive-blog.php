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

<div class="breadcrumb breadcrumb--archive-blog">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
</div>


<section class="archive-blog sub-blog">
    <div class="archive-blog__inner inner">
        <div class="archive-blog__body ">












    <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $taxonomy_slug = 'category1'; // カスタムタクソノミーのスラッグを指定
        $post_type_slug = 'blog'; // 投稿タイプのスラッグを指定
        $terms = get_terms($taxonomy_slug); // タームを取得
    ?>



<ul class="archive-blog__tab tab">
    <?php foreach ( $terms as $value ) : ?>
        <li class="tab__list<?php if( $value === reset($terms) ) : ?> is-active<?php endif; ?>"><?php echo esc_html($value->name); ?></li>
    <?php endforeach; ?>
</ul>





<div class="archive-blog__panel panel">
<?php foreach ( $terms as $value ) : ?>
<?php
$term_slug = $value->slug;
$args = array(
'paged'=>$paged,
'post_type' => $post_type_slug,
$taxonomy_slug => $term_slug,
'posts_per_page' => 9,
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
        <p class="card__category">
        <?php
$terms = get_the_terms( $post ->ID, 'category1' );
foreach( $terms as $term ) {
    if($term->parent){
    echo $term->name;
    }
}
?>
        </p><!-- /.card__category -->
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



<div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
    <?php wp_pagenavi();?>
</div><!-- /.pagenation -->






        </div><!-- /.archive-blog__body -->
    </div><!-- /.archive-blog__inner -->
</section><!-- /.archive-blog -->



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
                <span>お問い合わせ</span>
                </a><!-- /.c-button -->
            </div>
        </div><!-- /.article -->
        </div><!-- /.inner -->
    </section><!-- /.contact -->




<?php get_footer(); ?>