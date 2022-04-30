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
                        <!-- 「暮らし」は固定ページで -->
                        <?php
                            echo 
                            '<a href="'. esc_url(get_category_link(17)) .'">
                                <i class="fa-solid fa-lemon" aria-hidden="true"></i>
                                暮らし
                            </a>';
                        ?>
                        </li>
                        <li class="text-center">
                        <!-- 「学び」はカテゴリページで -->
                        <?php
                            echo 
                            '<a href="'. esc_url(get_category_link(18)) .'">
                                <i class="fa-solid fa-pencil" aria-hidden="true"></i>
                                学び
                            </a>';
                        ?>
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
               
                <div class="contentInfo d-flex flex-column">
                    <div class="row">
                    <?php 
                        $paged = (int) get_query_var('paged');
                        $tag_posts = get_posts(array(
                            'post_type' => 'post',
                            'tag_id' => 19,
                            // スペース付きのタグには、そのスペースをハイフンで埋める
                            'tag' => 'web-production',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged
                        ));
                        global $post;
                    
                        if($tag_posts):
                                foreach($tag_posts as $post):
                                    setup_postdata($post);
                    ?>
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink(); ?>" class="bg-white"> <!-- 記事をループで取得 -->
                                <article class="text-center">
                                    <?php the_post_thumbnail('', array('class'=> 'thumbSmall')); ?>
                                    <h2 class="cntH2 text-left"><?php the_title(); ?></h2>
                                </article>
                            </a>
                        <?php else: ?>
                            <a href="<?php the_permalink(); ?>" class="bg-white"> <!-- 記事をループで取得 -->
                                <article class="text-center bg-white">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"
                                    class="thumbSmall" />
                                    <h2 class="cntH2 text-left"><?php the_title(); ?></h2>
                                </article>
                            </a>
                        <?php endif; ?> 
                    <?php endforeach; endif; ?>
                    </div>
                </div>
                <?php
                    the_posts_pagination(
                        array(
                            'mide_size' => 5,
                            'prev_next' => true,
                            'prev_text' => __('<i class="fa-solid fa-angle-left"></i>'),
                            'next_text' => __('<i class="fa-solid fa-angle-right"></i>'),
                            'current' => max( 1, get_query_var('paged') ),
                            'type' => 'list'
                        )    
                    );
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>