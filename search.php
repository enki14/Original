<?php get_header(); ?>
<div class="wrap">
    <div id="main" class="col-md-10">
        <div class="main__content">
            <section>
                <div class="main__title">
                    <h1>
                        「<?php the_search_query(); ?>」の検索結果
                    </h1>
                </div>
            </section>
            <div class="content__catInfo d-flex">
                <div class="row">
                    <?php 
                        if(have_posts() && get_search_query()):
                            while(have_posts()):
                                the_post();
                    ?>
                        <article> 
                            <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"/>
                            <?php endif; ?>
                                <h2 class="content__catInfo__h2 text-left"><?php the_title(); ?></h2>
                                
                            </a>
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i><time><?php the_time('Y/m/d') ?></time></span>
                        </article>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="col-full">
                            <div class="wrap-col">
                                <p>検索結果に該当する記事がありませんでした。</p>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="pgNation">
                <?php
                    the_posts_pagination(
                        array(
                            'mide_size' => 5,
                            'prev_next' => true,
                            'prev_text' => __('<i class="fa-solid fa-angle-left"></i>'),
                            'next_text' => __('<i class="fa-solid fa-angle-right"></i>'),
                        )
                    );
                ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>