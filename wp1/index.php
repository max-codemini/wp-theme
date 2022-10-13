<?php get_header(); ?>






<section class="card-block">
            <div class="card-block__inner inner">
                
            <div class="card-block__item cards">
                
            <?php
    $args = [
    'paged'          => $paged, //WP-PageNaviの場合は必ず記載
    'post_type' => 'blog', // カスタム投稿名が「blog」の場合
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
        </section> 



















        <section class="card-block">
    <div class="card-block__inner inner">
                        <!-- 全てのカテゴリー-->
                <div class="tabmenu tabactive mr01">ALL</div>
                <div class="tabcontent">
                    <div class="cards-items">
                        <?php
                        $args = array(
                            'paged'          => $paged, //WP-PageNaviの場合は必ず記載
                            'post_type' => 'blog',
                            'posts_per_page' => 9,
                            'order' => 'DESC',
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'category1',
                                'terms' => array('all'),
                                'field' => 'slug'
                            ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                        ?>


                        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <!-- ループする投稿の内容 -->
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



                        <!-- ループの終了と投稿データのリセット -->
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                        <div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
                            <?php wp_pagenavi();?>
                        </div><!-- /.pagenation -->
                    </div><!-- /.cards-items -->
        </div>
    





                        <!-- カテ-->
        <div class="tabmenu tabactive mr01">カテ</div>
            <div class="tabcontent">
                <div class="card-block__item cards">
                        <?php
                        $args = array(
                            'paged'          => $paged, //WP-PageNaviの場合は必ず記載
                            'post_type' => 'blog',
                            'posts_per_page' => 9,
                            'order' => 'DESC',
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'category1',
                                'terms' => array('cate'),
                                'field' => 'slug'
                            ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                        ?>


                        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <!-- ループする投稿の内容 -->
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



                        <!-- ループの終了と投稿データのリセット -->
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                        <div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
                            <?php wp_pagenavi();?>
                        </div><!-- /.pagenation -->
                </div>
        </div>
























                        <!-- カテゴリー-->
        <div class="tabmenu tabactive mr01">カテゴリ</div>
            <div class="tabcontent">
                <div class="card-block__item cards">
                        <?php
                        $args = array(
                            'paged'          => $paged, //WP-PageNaviの場合は必ず記載
                            'post_type' => 'blog',
                            'posts_per_page' => 9,
                            'order' => 'DESC',
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'category1',
                                'terms' => array('category'),
                                'field' => 'slug'
                            ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                        ?>


                        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <!-- ループする投稿の内容 -->
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



                        <!-- ループの終了と投稿データのリセット -->
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                        <div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
                            <?php wp_pagenavi();?>
                        </div><!-- /.pagenation -->
                </div>
        </div>























                        <!-- カテゴリカテゴリ-->
        <div class="tabmenu tabactive mr01">カテゴリカテゴリ</div>
            <div class="tabcontent">
                <div class="card-block__item cards">    
                        <?php
                        $args = array(
                            'paged'          => $paged, //WP-PageNaviの場合は必ず記載
                            'post_type' => 'blog',
                            'posts_per_page' => 9,
                            'order' => 'DESC',
                            'tax_query' => array(
                            array(
                                'taxonomy' => 'category1',
                                'terms' => array('categorycategory'),
                                'field' => 'slug'
                            ),
                            ),
                        );
                        $the_query = new WP_Query( $args );
                        ?>


                        <?php if ( $the_query->have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post(); ?>

                        <!-- ループする投稿の内容 -->
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



                        <!-- ループの終了と投稿データのリセット -->
                        <?php endwhile; endif; wp_reset_postdata(); ?>

                </div>
        </div>







    </div>
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











<div class="wp-pagenavi wp-pagenavi--yellow archive-works__pagenavi">
    <?php wp_pagenavi();?>
</div><!-- /.pagenation -->













<div class="archive-works__inner">
<div class="archive-works__items">

<?php
    $args = [
    'paged'          => $paged, //WP-PageNaviの場合は必ず記載
    'post_type' => 'works', // カスタム投稿名が「works」の場合
    'posts_per_page' => 6, // 表示する数
    ];
    $my_query = new WP_Query($args); ?>

<?php if ($my_query->have_posts()): // 投稿がある場合 ?>
    
    
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <!-- ▽ ループ開始 ▽ -->
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
    <!-- △ ループ終了 △ -->
    <?php endwhile; ?>
</div><!-- /.archive-works__items -->
</div><!-- /.archive-works__inner -->
<?php else: // 投稿がない場合?>
    <p>まだ投稿がありません。</p>
<?php endif; wp_reset_postdata(); ?>









<div class="gallery js-single-works-swiper">                
            <div class="swiper-container gallery__container">
                <div class="swiper-wrapper gallery__wrapper">
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider2.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider3.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider4.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider5.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider6.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider7.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider8.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider9.jpg" alt=""></div>
                </div>
                <div class="swiper-button-prev">
                    <div class="gallery__prev-button js-gallery__prev-button"></div><!-- /.gallery__prev-button -->
                </div>
                <div class="swiper-button-next">
                <div class="gallery__prev-button js-gallery__prev-button"></div>
                </div>
            </div>

            <div class="swiper-container gallery__thumbs">
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider2.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider3.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider4.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider5.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider6.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider7.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider8.jpg" alt=""></div>
                    <div class="swiper-slide gallery__img--mini"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/slider9.jpg" alt=""></div>
            </div>
        </div>









<?php get_footer(); ?>