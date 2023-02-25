<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crispy_Div
 */

get_header();
crispydiv_page_header( array(
    'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
    'title-class' => 'h2',
    'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

    <main id="site-content" class="site-main">
        <div class="inner medium">
	        <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-content-grid">
                    <div class="content-column">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
			                    <?php the_content(); ?>
                            </div>
                        </article>
                    </div>
                    <div class="sidebar-column">
                        <div class="sidebar">
		                    <?php dynamic_sidebar( 'Post Sidebar' ); ?>
                        </div>
                    </div>
                </div>
	        <?php endwhile; ?>
        </div>
	</main>

<?php
get_footer();
