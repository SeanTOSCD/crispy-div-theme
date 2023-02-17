<?php
/**
 * The template for displaying all single courses
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-purple',
	'corner-accent-color' => 'white-orange',
	'title-label'         => 'Course:',
	'description'         => get_the_excerpt(),
) );
?>

	<main id="site-content" class="site-main">
		<div class="inner medium">
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
		</div>
	</main>

<?php
get_footer();
