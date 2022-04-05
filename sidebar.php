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
                <?php if(!is_category()): ?>
                    <div class="side-4">
                        <p>スポンサーリンク</p>
                        <div></div>
                    </div>
                <?php endif; ?>
            </div>
