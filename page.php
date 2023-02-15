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
	'bg-color' => 'background-gray',
	'corner-accent-color' => 'black-orange',
) );
?>

    <main id="site-content" class="site-main">
        <div class="inner medium">
	        <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-content-grid">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
			                <?php the_content(); ?>
                        </div>
                    </article>
                    <div class="sidebar">
		                <?php dynamic_sidebar( 'Post Sidebar' );  ?>
                    </div>
                </div>
	        <?php endwhile; ?>
        </div>
	</main>

<?php
get_footer();
