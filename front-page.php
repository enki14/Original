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
                        <a href="#"> <!-- 記事をループで取得 -->
                            <article class="text-center bg-white">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/denshi-maney.png" width="306"/>
                                <h2 class="cntH2 text-left">HTML/CSS入門</h2>
                            </article>
                        </a>  
                        <a href="#"> <!-- 記事をループで取得 -->
                            <article class="text-center bg-white">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/electronic-payment2.png" width="306"/>
                                <h2 class="cntH2 text-left">jQuery入門</h2>
                            </article>
                        </a>  
                        <a href="#"> <!-- 記事をループで取得 -->
                            <article class="text-center bg-white">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/programmer-1653351_640.png" width="306"/>
                                <h2 class="cntH2 text-left">XAMPP環境設定</h2>
                            </article>
                        </a>  
                        <a href="#"> <!-- 記事をループで取得 -->
                            <article class="text-center bg-white">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/video-conference-5167472_640.jpg" width="306"/>
                                <h2 class="cntH2 text-left">レンタルサーバー５選</h2>
                            </article>
                        </a>  
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