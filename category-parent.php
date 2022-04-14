
<!-- 親であるタクソノミーを指定するには「 ->parent 」を指定する -->

<?php 
    $cat_posts = get_posts(array(
        'post_type' => 'post',
        'category' => $parent_id,
        'orderby' => 'date',
        'order' => 'DESC',
        'post_per_page' => -1
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