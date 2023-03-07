<?php
/**
 * Full-width template (no sidebar)
 * Template Name: Full-width
 */

get_header();
crispydiv_page_header( array(
	'title' => get_field( 'page_header_title' ) ?: get_the_title( get_the_ID() ),
	'title-class' => 'h2',
	'description' => get_field( 'page_header_description' ) ?: '',
) );
?>

	<main id="site-content" class="site-main full-width">
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
				</div>
			<?php endwhile; ?>
		</div>
	</main>

<?php
get_footer();
