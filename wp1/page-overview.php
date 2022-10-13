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
            <source  srcset="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-overview_pc.jpg" media="(min-width: 768px)" alt="contentの画像1"><!-- 幅768px以上なら表示 -->
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/mv-overview_sp.jpg" alt="">
        </picture>
    </div>
    
    <div class="mv-sub__head">
        <h2 class="mv-sub__title">企業概要</h2><!-- /.main__title -->
    </div><!-- /.mv-sub__head -->
</div>


<div class="breadcrumb breadcrumb--overview-sub">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
        </div>

<div class="overview-sub">
    <div class="overview-sub__inner">
        <dl class="overview-sub__body info">
            <div class="info__block">
                <dt class="info__title">会社名</dt>
                <dd class="info__text"><?php the_field('会社名'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">設立</dt>
                <dd class="info__text"><?php the_field('設立'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">資本金</dt>
                <dd class="info__text"><?php the_field('資本金'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">売上高</dt>
                <dd class="info__text"><?php the_field('売上高'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">代表者</dt>
                <dd class="info__text"><?php the_field('代表者'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">従業員数</dt>
                <dd class="info__text"><?php the_field('従業員数'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">事業内容</dt>
                <dd class="info__text"><?php the_field('事業内容'); ?></dd>
            </div><!-- /.info__block -->

            <div class="info__block">
                <dt class="info__title">所在地</dt>
                <dd class="info__text"><?php the_field('所在地'); ?></dd>
            </div><!-- /.info__block -->
        </dl>
    </div><!-- /.overview-__body -->

    <div class="overview-sub__map map">
        <div class="map__iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d642.9778044647346!2d139.74526541616947!3d35.65826401896173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1664004994480!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- /.map__iframe -->
    </div><!-- /.map -->
</div>



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
