<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Crispy_Div
 */

get_header();
crispydiv_page_header( array(
    'bg-color' => 'background-purple',
    'corner-accent-color' => 'white-orange',
));
?>

    <main id="site-content" class="site-main">
        <div class="inner medium">
	        <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-content-grid">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
			                <?php the_content(); ?>
                        </div>
                        <footer class="post-footer">
<!--	                        --><?php //dynamic_sidebar( 'Post Footer' );  ?>
                        </footer>
                    </article>
                    <div class="sidebar">
                        <?php dynamic_sidebar( 'Post Sidebar' );  ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
	    <?php get_template_part( 'template-parts/section', 'subscribe', array(
            'title' => 'Subscribe for more',
            'size' => 'medium',
        ) ); ?>
        <div class="post-navigation element-spacing small background-gray">
		    <?php
		    the_post_navigation(
			    array(
				    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'crispydiv' ) . '</span> <span class="nav-title">%title</span>',
				    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'crispydiv' ) . '</span> <span class="nav-title">%title</span>',
			    )
		    );
		    ?>
        </div>
	</main>

<?php
get_footer();
