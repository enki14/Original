<?php get_header(); ?>
<div class="wrap">
    <div class="breadcrumb">
        <?php
            if(function_exists('yoast_breadcrumb')){
                yoast_breadcrumb('<span><i class="fa-solid fa-location-dot fa-lg"></i></span>','');
            }
        ?>
    </div>
    <div id="main" class="col-md-10">
        <div class="main__content">
            <?php 
                $category = get_the_category();
                $cat_now = $category[0];
                $parent_id = $cat_now->parent;
                global $post;
            ?>
            <section>
                <div class="main__title">
                    <h1>
                        <?php single_cat_title(); ?>
                    </h1>
                </div>
                <div class="term-name clearfix">
                    <ul>
                        <!-- get_the_categoryにはタームネームがないので、 -->
                        <!-- get_categoriesにparentを設定して、一つずつ$postでタームネームを取得していった -->
                        <?php 
                            $args = array(
                                'parent' => $parent_id
                            );
                            $categories = get_categories($args); 
                            if($categories):
                                foreach($categories as $post):
                                    setup_postdata($post);
                                    
                        ?>
                        <li><a href="<?php the_permalink(); ?>"><?php echo $post->cat_name ?></a></li>
                        <?php endforeach; endif; wp_reset_postdata(); ?> 
                    </ul>
                </div>
            </section>
            <div class="content__catInfo d-flex">
                <div class="row">
                    <!-- 親であるタクソノミーを指定するには「 ->parent 」を指定する -->
                    <?php 
                        $cat_posts = get_posts(array(
                            'post_type' => 'post',
                            'category' => $parent_id,
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'post_per_page' => -1
                        ));
                        if($cat_posts): 
                            foreach($cat_posts as $post):
                                setup_postdata($post);
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
                    <?php endforeach; endif; wp_reset_postdata(); ?>
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