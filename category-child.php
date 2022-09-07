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
                    if(have_posts()): 
                        while(have_posts()):
                            the_post();
                ?>
                    <article> 
                        <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() .'/images/no-image.png') ?>" alt="no-image"/>
                        <?php endif; ?>
                            <h2 class="content__catInfo__h2 text-left"><?php the_title(); ?></h2>
                            
                        </a>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i><time><?php the_time('Y/m/d') ?></time></span>
                    </article>
                    <?php endwhile; endif; ?>
                </div>
            </div>
            <?php my_paginate(); ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>