<?php get_header(); ?>
    <?php 
        $category = get_the_category();
        $cat_now = $category[0];
        $term_id = $cat_now->term_id;
        $parent_id = $cat_now->parent;

        $obj = get_queried_object();
        // get_term_childrenで子カテゴリがあるかどうかの判定
        // 第二引数は'category'という分類。それぞれの固有の名称ではない。
        $children = get_term_children($parent_id, 'category');
        // get_queried_object()->parent === 0 は親カテゴリの意味
        if($obj && $obj->parent === 0 && !empty($children)):
            include(TEMPLATEPATH . '/category-parent.php');
        elseif($obj && $obj->parent === 0 && empty($children) && $term_id != 17):
            include(TEMPLATEPATH . '/category-notChild.php');
        elseif($term_id == 17):
            include(TEMPLATEPATH . '/category-life.php');
        else:
            include(TEMPLATEPATH . '/category-child.php');
        endif;
    ?>
<?php get_footer(); ?>
<script>
    // ページネーションの「 … 」を削除する
    jQuery(function(){
        jQuery('.dots').parent('li').hide();
    });
</script>