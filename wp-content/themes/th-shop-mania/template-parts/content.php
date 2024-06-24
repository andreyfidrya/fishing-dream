<?php
/**
 * Template part for displaying posts
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package  Th Shop Mania
 * @since 1.0.0
 */
$no_thumb = 'no-thumb';
if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
	$no_thumb = 'thumb';
}
$th_shop_mania_pro_blog_layout = esc_html(get_theme_mod('th_shop_mania_pro_blog_layout','thsm-blog-layout-1'));
?>
<?php // list_all_products(); ?>