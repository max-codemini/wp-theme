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
            <source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-works_pc.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-works_sp.jpg" alt="事業内容のSP画像">
        </picture>
    </div>
    
    <div class="mv-sub__head">
        <h2 class="mv-sub__title">制作実績</h2><!-- /.main__title -->
    </div><!-- /.mv-sub__head -->
</div>

<div class="breadcrumb archive-works__breadcrumb">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
</div>



















<section class="archive-works sub-works">
    <div class="archive-works__inner inner">
        
    <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $taxonomy_slug = 'category1'; // カスタムタクソノミーのスラッグを指定
        $post_type_slug = 'works'; // 投稿タイプのスラッグを指定
        $terms = get_terms($taxonomy_slug); // タームを取得
    ?>



<ul class="archive-works__tab tab">
    <?php foreach ( $terms as $value ) : ?>
        <li class="tab__list<?php if( $value === reset($terms) ) : ?> is-active<?php endif; ?>"><?php echo esc_html($value->name); ?></li>
    <?php endforeach; ?>
</ul>





<div class="archive-works__panel panel">
<?php foreach ( $terms as $value ) : ?>
<?php
$term_slug = $value->slug;
$args = array(
'paged'=>$paged,
'post_type' => $post_type_slug,
$taxonomy_slug => $term_slug,
'posts_per_page' => 6,
'order' => 'DESC',
'orderby' => 'date',
'post_status' => 'publish'
);
$myquery = new WP_Query( $args );
?>
    <div class="panel__list<?php if( $value === reset($terms) ) : ?> is-show<?php endif; ?>">
        <div class="archive-works__items">
            <?php if ( $myquery->have_posts()): ?>
            <?php while($myquery->have_posts()): $myquery->the_post(); ?>
            


            <a href="<?php the_permalink(); ?>" class="archive-works__item card-works">
        <div class="card-works__img">
                <?php the_post_thumbnail('thumbnail'); ?>
        </div><!-- /.card-works__img -->
        <p class="card-works__category">
        <?php
    if ($terms = get_the_terms($post->ID, 'category1')) {
    foreach ( $terms as $term ) {
    echo esc_html($term->name);
    }
    }
    ?>
    </p><!-- /.card-works__category -->
        <h3 class="card-works__title"><?php the_title(); ?></h3>
    </a>


            <?php endwhile; ?>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
        <?php endforeach; ?>
</div>



<div class="wp-pagenavi archive-works__pagenavi">
    <?php wp_pagenavi();?>
</div>









        
    </div><!-- /.archive-works__inner -->
</section><!-- /.archive-works -->






















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