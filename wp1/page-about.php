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

<div class="sub-mv">
    <div class="sub-mv__img">
        
    </div>
    <div class="sub-mv__head">
        <h2 class="sub-mv__title">お知らせ</h2><!-- /.main__title -->
    </div><!-- /.sub-mv__head -->
</div><!-- /.main -->


<?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',//投稿タイプ
		'category_name' => 'news',
		'posts_per_page' => 5,//投稿表示数
	)
);
?>
<?php if ( $news_query->have_posts() ) : ?>
	<?php while ( $news_query->have_posts() ) : ?>
		<?php $news_query->the_post(); ?>
		<p>処理内容</p>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>