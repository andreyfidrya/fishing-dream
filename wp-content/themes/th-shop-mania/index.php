<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Th Shop Mania
 * @since 1.0.0
 */
get_header();
if (isset($post->ID)) {
if(th_shop_mania_is_blog()){
$th_shop_mania_blog_page_sidebar = get_post_meta( get_option( 'page_for_posts' ), 'th_shop_mania_sidebar_dyn', true );
}elseif(empty(get_post_meta( $post->ID, 'th_shop_mania_sidebar_dyn', true ))){
    $th_shop_mania_blog_page_sidebar = 'no-sidebar';
}
else{
    $th_shop_mania_blog_page_sidebar = get_post_meta( $post->ID, 'th_shop_mania_sidebar_dyn', true );
}
}
else{
    $th_shop_mania_blog_page_sidebar = '';
}
?>
<div id="content" class="page-content blog <?php echo esc_attr($th_shop_mania_blog_page_sidebar); ?>">
            <div class="container">
            <div class="content-wrap" >
                    <div class="main-area">
                        <div id="primary" class="primary-content-area"> 
                            <div class="primary-content-wrap">
                                <main id="main" class="site-main" role="main">
                                 <?php 
            if( have_posts()):
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                get_template_part( 'template-parts/content', get_post_format() );
                endwhile;
                
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;

            generate_products_by_category('feeder-roads');
            generate_products_by_category('spinning-roads');
            generate_products_by_category('float-roads');
           
            ?>
        </main>
        <?php th_shop_mania_post_loader(); ?>
                           </div> <!-- end primary-content-wrap-->
                        </div><!-- end primary primary-content-area-->
                        <?php 
                        if($th_shop_mania_blog_page_sidebar != 'no-sidebar' ){
                            get_sidebar();
                            }
                 ?>
                 <!-- end sidebar-primary  sidebar-content-area-->
                    </div> <!-- end main-area -->
                </div> <!-- end content-wrap -->
            </div> 
        </div> <!-- end content page-content -->        
        
<?php get_footer();?>