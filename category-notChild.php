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
            <section>
                <div class="main__title">
                    <h1>
                        <?php single_cat_title(); ?>
                    </h1>
                </div>
            </section>
            <div class="content__catInfo d-flex">
                <div class="row">
                <?php
                    // 子カテゴリがない親カテゴリはcategory_nameも一緒にセットする
                    $cat_posts = get_posts(array(
                        'post_type' => 'post',
                        'category' => $parent_id,
                        'category_name' => $slug, 
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => -1
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
            <?php
                $paged = get_query_var('paged', 1);
                $args = array(
                    'post_type' => 'post',
                    'paged' => $paged
                );
                $the_query = new WP_Query($args);
                echo '現在のページ：'. $paged;
                echo '最大ページ数：'. $the_query->max_num_pages;
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