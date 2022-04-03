<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/38f9c31fea.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="text-center">
        <h1 class="h1"><img src="<?php echo get_template_directory_uri(); ?>/images/test-logo.png" width="50px"/></h1>
    </header>
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
            <div class="side">
                <div class="side-1">
                    <h4 class="p-3 side-1__title">カテゴリー</h4>
                    <ul class="side-1__content">
                        <li>
                            <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                            <a href="#">webデザイン入門</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-tablet-screen-button" aria-hidden="true"></i>
                            <a href="#">wordpress入門</a>
                            <ul class="side-1__content__child">
                                <li>
                                    <a href="">1</a>
                                </li>
                                <li>
                                    <a href="">2</a>
                                </li>
                                <li>
                                    <a href="">3</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <i class="fa-solid fa-paintbrush"></i>
                            <a href="#">リファレンス</a>
                        </li>
                    </ul>
                </div>
                <div class="side-2">
                    <h4 class="p-3 side-2__title">運営者について</h4>
                    <article>
                        <img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl'] . $upload_dir['subdir']; ?>/original.jpg" />
                        <dl>
                            <dt>運営者さん</dt>
                            <dd>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</dd>
                        </dl>
                        <p>
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            ×××.×××.×××@gmail.com
                        </p>
                        <div class="clearfix">
                            <a href="https://twitter.com/share?url=https://point-everyday.com/
                            &text=スーパーマーケットのポイントカード情報を提供します【 東京版 】
                            &hashtags=スーパー,ポイントカード,クレジット,お得情報,東京"
                            class="tw" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                                <div>@testsite</div>
                            </a>
                            <a href="http://www.facebook.com/share.php?u=https://point-everyday.com/" 
                            class="fb" rel="nofollow" target="_blank">
                                <i class="fab fa-facebook"></i>
                                <div>testsite運営者</div>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="side-3">
                    <h4 class="p-3 side-3__title">検索</h4>
                    <div class="side-3__content">
                        <form action="" method="get">
                            <input type="text" name="s" id="s"/>
                            <button type="submit" class="side-3__btn"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
                <div class="side-4">
                    <p>スポンサーリンク</p>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="hm">
            <i class="fa-solid fa-house-chimney" aria-hidden="true"></i>
            トップページへ
        </div>
        <div class="footer-02">
            <div class="wrap">
                <p>
                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                    <a href="#" class="gray">利用規約</a>
                </p>
                <p class="footer-copy">©Copyright 2030 testsite All rights reserved.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>