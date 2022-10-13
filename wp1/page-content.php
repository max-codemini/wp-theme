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
            <source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-content_pc.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-content_sp.jpg" alt="事業内容のSP画像">
        </picture>
    </div>
    
    <div class="mv-sub__head">
        <h2 class="mv-sub__title">事業内容</h2><!-- /.main__title -->
    </div><!-- /.mv-sub__head -->
</div>
<div class="breadcrumb breadcrumb--content-sub">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>

<section class="content-sub">
    <div class="content-sub__inner inner">
		<div class="content-sub__head">
			<h2 class="content-sub__title">企業理念</h2><!-- /.content-sub__text -->
			<p class="content-sub__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.content-sub__text -->
		</div><!-- /.content-sub__head -->
	</div><!-- /.content-sub__inner -->

	<div class="content-sub__items">
		<div class="content-sub__item">
			<div class="explain">
				<div class="explain__img">
					<picture>
						<source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_pc1.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_sp1.jpg" alt="事業内容のSP画像">
					</picture>
				</div><!-- /.explain__img -->
				<div class="explain__body">
					<h3 class="explain__title">企業理念１</h3><!-- /.explain__title -->
					<p class="explain__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.explain__text -->
				</div><!-- /.explain__body -->
			</div><!-- /.explain -->
		</div><!-- /.content-sub__item -->

		<div class="content-sub__item">
			<div class="explain	 explain--right">
				<div class="explain__img">
					<picture>
						<source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_pc2.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_sp2.jpg" alt="事業内容のSP画像">
					</picture>
				</div><!-- /.explain__img -->
				<div class="explain__body explain__body--right">
					<h3 class="explain__title">企業理念１</h3><!-- /.explain__title -->
					<p class="explain__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.explain__text -->
				</div><!-- /.explain__body -->
			</div><!-- /.explain -->
		</div><!-- /.content-sub__item -->

		<div class="content-sub__item">
			<div class="explain">
				<div class="explain__img">
					<picture>
						<source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_pc3.jpg" media="(min-width: 768px)" alt="事業内容のPC画像"><!-- 幅768px以上なら表示 -->
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/common/content-sub_sp3.jpg" alt="事業内容のSP画像">
					</picture>
				</div><!-- /.explain__img -->
				<div class="explain__body">
					<h3 class="explain__title">企業理念１</h3><!-- /.explain__title -->
					<p class="explain__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p><!-- /.explain__text -->
				</div><!-- /.explain__body -->
			</div><!-- /.explain -->
		</div><!-- /.content-sub__item -->

	</div><!-- /.content-sub__items -->

</section>




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