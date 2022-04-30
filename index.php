<?php get_header(); ?>
    <div class="wrap">
        <div id="main" class="col-md-10">
            <div id="catmenu">
                <nav>
                    <ul>
                        <li class="text-center">
                            <i class="fa-solid fa-paintbrush" aria-hidden="true"></i>
                            デザイン・ウェブ制作
                        </li>
                        <li class="text-center">
                            <i class="fa-solid fa-lemon" aria-hidden="true"></i>
                            暮らし
                        </li>
                        <li class="text-center">
                        <i class="fa-solid fa-pencil" aria-hidden="true"></i>
                            学び
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="main__content">
                <div id="new-entry">
                    <p class="m-0">
                        <i class="fa-solid fa-rocket"></i>
                        新着記事
                    </p>
                </div>
               
                <div class="contentInfo d-flex">
                    <div class="row">
                    <?php if(have_posts()):
                            while(have_posts()):
                                the_post();
                    ?>
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>" class="bg-white"> <!-- 記事をループで取得 -->
                                <article class="text-center">
                                    <?php the_post_thumbnail(); ?>
                                    <h2 class="cntH2 text-left"><?php the_title(); ?></h2>
                                </article>
                            </a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" class="bg-white"> <!-- 記事をループで取得 -->
                                <article class="text-center bg-white">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"/>
                                    <h2 class="cntH2 text-left"><?php the_title(); ?></h2>
                                </article>
                            </a>
                        <?php endif; ?> 
                    <?php endwhile; endif; ?>
                    </div>
                </div>
                <?php
                    the_posts_pagination(
                        array(
                            'mide_size' => 5,
                            'prev_next' => true,
                            'prev_text' => __('<i class="fa-solid fa-angle-left"></i>'),
                            'next_text' => __('<i class="fa-solid fa-angle-right"></i>'),
                            'type' => 'list'
                        )
                    );
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>