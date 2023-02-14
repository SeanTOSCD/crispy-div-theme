<?php
/**
 * Blog home
 */

get_header();
//crispydiv_page_header( array(
//    'bg-color' => 'background-gray',
//    'corner-accent-color' => 'black-orange',
//) );

get_template_part( 'template-parts/section', 'subscribe', array(
	'title' => 'Crispy Reads',
	'size' => 'medium',
) );
?>

    <section class="content-filter-section">
        <div class="inner small">
            <div class="content-filter-grid general-grid large">
                <div class="facetwp-filter">
                    <span class="content-filter-title subdued-title">Filter by Category</span>
                    <div class="content-filter-controls">
		                <?php echo do_shortcode( '[facetwp facet="categories"]' ); ?>
                    </div>
                </div>
                <div class="search-filter">
                    <span class="element-lead-icon colored">
                    <span class="content-filter-title subdued-title">Search Content</span>
                    <?php echo get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>

	<main id="site-content" class="site-main">
		<?php if ( have_posts() ) : ?>
            <div class="blog-grid general-grid large">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
                    <div class="grid-item">
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item-content' ); ?>>
                            <header class="entry-header">
								<?php the_title( '<h2 class="entry-title grid-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                            </header>
							<?php crispydiv_post_thumbnail(); ?>
                            <div class="entry-content grid-item-description">
								<?php the_excerpt(); ?>
                            </div>
                            <div class="cta">
                                <?php
                                crispydiv_button( array(
                                    'text' => 'Keep Reading',
                                    'url' => get_permalink(),
                                    'classes' => array( 'button', 'purple', 'small', 'outline' ),
                                ) );
                                ?>
                            </div>
                        </article>
                    </div>
				<?php
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
		endif;
		?>
	</main>

<?php
get_footer();
