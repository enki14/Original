            <div class="side">
                <div class="side-1">
                    <h4 class="p-3 side-1__title">カテゴリー</h4>
                    <?php 
                    echo '<ul class="side-1__parent">';
                            $args = array(
                                'parent' => 0
                            );
                            $parent_categories = get_categories($args);
                            foreach($parent_categories as $parent_category){
                                echo '<li>'. $parent_category->description . 
                                '<a href="' . esc_url(get_category_link($parent_category->term_id)) .'">' 
                                . $parent_category->name . '</a>';

                                $args = array(
                                    'parent' => $parent_category->term_id
                                );
                                $children_categories = get_categories($args);
                                if($children_categories != ''){
                                    echo '<ul class="side-1__children">';
                                    foreach($children_categories as $children_category){
                                        echo '<li class="children__li"><a href="' 
                                        . esc_url(get_category_link($children_category->term_id)) . '" 
                                        class="children__a">' . $children_category->name . '</a></li>';
                                    }
                                    echo '</ul>';
                                }
                                echo '</li>';
                            }
                    echo '</ul>';
                    ?>
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
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <?php if(!is_category()): ?>
                    <div class="side-4">
                        <p>スポンサーリンク</p>
                        <div></div>
                    </div>
                <?php endif; ?>
            </div>
