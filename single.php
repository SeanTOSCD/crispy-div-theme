<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Crispy_Div
 */

get_header();
?>

    <main id="site-content" class="site-main">
        <div class="inner large">
	        <?php
	        while ( have_posts() ) :
		        the_post();

		        get_template_part( 'template-parts/content', get_post_type() );

		        the_post_navigation(
			        array(
				        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'crispydiv' ) . '</span> <span class="nav-title">%title</span>',
				        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'crispydiv' ) . '</span> <span class="nav-title">%title</span>',
			        )
		        );

	        endwhile; // End of the loop.
	        ?>
        </div>
	</main><!-- #main -->

<?php
get_footer();
