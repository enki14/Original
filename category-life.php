<div class="wrap">
    <div id="main" class="col-md-10">
        <article class="page">
            <div class="header-content">
                <h1 class="post-title">
                    <?php single_cat_title(); ?>
                    <p class="post-subtitle">
                    〜知っておくと便利な暮らしの知識まとめ〜
                    </p>
                </h1>
                
                <!-- サムネイル出力は第1がサイズ、第2がclass付与 -->
                <div class="thumb-eria">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/357612.png" alt="house">
                </div>
                <p class="post-disc">
                    「生活の知恵」カテゴリーでは、知っておくと役に立つ生活の知識や料理のコツ、
                    レシピ、便利なサービスの活用方法などを分かりやすくまとめていきます。今後も少しずつ更新していきます。
                </p>
            </div>
            <div class="page-content">
                <h2>人気の記事</h2>
                <div class="content-eria d-flex">
                    <div class="row">
                        <?php $posts = get_posts('category=17'); global $post; ?>
                        <?php if($posts):
                                foreach($posts as $post): setup_postdata($post);  
                        ?>
                        <article class="clearfix"> 
                            <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.png"/>
                            <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <span class="posted-date"><i class="fa fa-clock-o" aria-hidden="true"></i><time><?php the_time('Y/m/d') ?></time></span>
                        </article>
                        <?php endforeach; endif; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
<div class="breadcrumb-page">
    <?php
        if(function_exists('yoast_breadcrumb')){
            yoast_breadcrumb('<span><i class="fa-solid fa-location-dot fa-lg"></i></span>','');
        }
    ?>
</div>