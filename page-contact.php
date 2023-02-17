<?php
/**
 * Contact page
 */

get_header();
crispydiv_page_header( array(
	'corner-accent-color' => 'black-orange',
	'title' => get_field( 'page_header_title' ),
	'title-class' => 'h2',
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="site-main">
		<div class="inner">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php gravity_form( 'Contact', false, false, false, '', true ); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
	</main>

<?php
get_footer();
