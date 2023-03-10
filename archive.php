<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crispy_Div
 */

get_header();
crispydiv_page_header( array(
	'corner-accent-color' => 'black-orange',
    'title' => get_the_archive_title(),
    'description' => get_the_archive_description(),
) );
?>

    <main id="site-content" class="site-main">
        <?php
        if ( have_posts() ) :
            ?>
            <div class="blog-grid general-grid large">
                <?php
                while ( have_posts() ) :
                    the_post();
	                get_template_part( 'template-parts/content', 'grid-item' );
                endwhile;
                ?>
            </div>
            <?php
            if ( $wp_query->max_num_pages > 1 ) :
                ?>
                <div class="posts-navigation-wrap element-spacing tiny">
                    <?php the_posts_navigation(); ?>
                </div>
                <?php
            endif;
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
	</main>

<?php
get_footer();
