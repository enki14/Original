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
                        $tag_posts = new WP_Query(array(
                            'post_type' => 'post',
                            'tag_id' => 19,
                            // スペース付きのタグには、そのスペースをハイフンで埋める
                            'tag' => 'web-production',
                            'posts_per_page' => 4,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged
                        ));
                    
                        if($tag_posts->have_posts()):
                                while($tag_posts->have_posts()):
                                    $tag_posts->the_post();
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
                                    <img src="<?php echo esc_url(get_template_directory_uri() .'/images/no-image.png') ?>"
                                    class="thumbSmall" />
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
                            'total' => $tag_posts->max_num_pages,
                            'type' => 'list'
                        )    
                    );
                ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>