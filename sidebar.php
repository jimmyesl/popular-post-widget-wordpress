<?php
/**
 * The sidebar containing the main widget area.
 *@ author: James soller
 * @package example
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
        <h3 class="pop-header">Must-Read Posts</h3>
	<?php $popular = new WP_Query(array('posts_per_page'=>7, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
	while ($popular->have_posts()) : $popular->the_post(); ?>
        <div class="pop-post">
        <div class="popcol1">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('pop-thumb'); ?></a>
        </div>
        <div class="popcol2">
	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        </div>
	<?php endwhile; wp_reset_postdata(); ?>
       <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
