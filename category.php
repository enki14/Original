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
            <section>
                <div class="main__title">
                    <h1>
                        Category-1
                    </h1>
                </div>
            </section>
            <div class="content__catInfo d-flex">
                <div class="row">
                    <article> <!-- 記事をループで取得 -->
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/denshi-maney.png"
                            class="content__catInfo__thumb" width="100px" height="100px"/>
                            <h2 class="content__catInfo__h2 text-left">HTML/CSS入門</h2>
                            
                        </a>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i><time>2020/02/02</time></span>
                    </article>  
                    <article> <!-- 記事をループで取得 -->
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/electronic-payment2.png" 
                            class="content__catInfo__thumb" width="100px" height="100px"/>
                            <h2 class="content__catInfo__h2 text-left">jQuery入門</h2>
                            
                        </a>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i><time>2020/02/02</time></span>
                    </article>  
                    <article> <!-- 記事をループで取得 -->
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/programmer-1653351_640.png" 
                            class="content__catInfo__thumb" width="100px" height="100px"/>
                            <h2 class="content__catInfo__h2 text-left">XAMPP環境設定</h2>
                            
                        </a>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i><time>2020/02/02</time></span>
                    </article>  
                    <article> <!-- 記事をループで取得 -->
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/video-conference-5167472_640.jpg" 
                            class="content__catInfo__thumb" width="100px" height="100px"/>
                            <h2 class="content__catInfo__h2 text-left">レンタルサーバー５選</h2>
                            
                        </a>
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i><time>2020/02/02</time></span>
                    </article>  
                </div>
            </div>
            <ul class="pgNation">
                <li>1</li> <!-- ページをループで取得 -->
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>