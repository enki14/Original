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
        <?php 
         if(have_posts()):
            while(have_posts()):
                the_post();
        ?>
        <article class="single">
            <header>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="posted-date">
                    <span><i class="fa-solid fa-arrows-rotate"></i><time><?php the_time('Y/m/d') ?></time></span>
                </div>
            </header>
            <div class="single-content">
                <!-- サムネイル出力は第1がサイズ、第2がclass付与 -->
                <?php the_post_thumbnail(array(552, 312), array('class'=> 'thumbClass')); ?>
                <div>
                    <?php
                        if(the_content()):
                            the_content();
                        endif;
                    
                    ?>
                </div>
            </div>
            <footer class="single-footer">
                <aside>
                    <div class="ss">
                        <ul class="clearfix">
                            <li class="sstw">
                                <a href="https://twitter.com/share?url=<?php echo get_permalink(); ?>&text=<?php echo get_the_title(); ?>"
                                target="_blank" rel="nofollow noopener">
                                    <i class="fa-brands fa-twitter fa-lg"></i>
                                    <span> ツイート</span>
                                </a>
                            </li>
                            <li class="ssfb">
                                <a href="http://www.facebook.com/share.php?u=<?php echo get_permalink(); ?>"
                                target="_blank" rel="nofollow noopener">
                                    <i class="fa-brands fa-facebook-f fa-lg"></i>
                                    <span> シェア</span>
                                </a>
                            </li>
                            <li class="sshtb">
                                <a href="http://b.hatena.ne.jp/entry/<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"
                                target="_blank" rel="nofollow noopener">
                                    <i class="fa-lg">B!</i>
                                    <span> はてブ</span>
                                </a>
                            </li>
                            <li class="sspkt">
                                <a href="http://getpocket.com/edit?url=<?php echo get_permalink();?>&title=<?php echo get_the_title(); ?>"
                                target="_blank" rel="nofollow noopener">
                                    <i class="fa-brands fa-get-pocket fa-lg"></i>
                                    <span> Pocket</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </footer>
        </article>
        <?php endwhile; endif; ?>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>