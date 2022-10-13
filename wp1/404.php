<!-- 404の内容 -->

<?php get_header(); ?>

<?php
$home = esc_url( home_url('/'));
?>
<div class="page-top">
    <a class="arrow-top" href="#"></a>
</div><!-- /.page-top -->


<div class="not-found">
    <h2 class="not-found__title">404 Not Found</h2><!-- /.404__title -->
    <p class="not-found__text">お探しのページは<br class="u-mobile">
見つかりませんでした。</p><!-- /.not-found__text -->

    <div class="not-found__button u-desktop">
                    <a href="<?php echo $home ?>" class="button button--not-found">
                        <span>TOPへ</span>
                    </a><!-- /.button -->
    </div>
</div>



<?php get_footer(); ?>