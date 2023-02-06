<?php
/**
 * The template for displaying all single courses
 */

get_header();
?>

	<main id="site-content" class="site-main">
		<div class="inner large">
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
