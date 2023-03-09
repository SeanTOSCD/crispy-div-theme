<?php
/**
 * The template for displaying all single posts
 */

get_header();
crispydiv_page_header( array(
	'bg-color'            => 'background-purple',
	'corner-accent-color' => 'white-orange',
	'title-class'         => 'h2',
) );
?>

    <main id="site-content" class="site-main">
        <div class="inner medium">
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="post-content-grid">
	                <?php crispydiv_post_thumbnail(); ?>
                    <div class="content-column">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content">
			                    <?php
                                the_content();
			                    wp_link_pages(
				                    array(
					                    'before' => '<div class="page-links">Pages:',
					                    'after'  => '</div>',
				                    )
			                    );
                                ?>
                            </div>
                            <footer class="entry-footer">
                                <?php
                                crispydiv_post_categories_tags();
                                if ( get_field( 'image_attribution' ) ) {
                                    ?>
                                    <p class="image-attribution"><?php echo get_field( 'image_attribution' ); ?></p>
                                    <?php
                                }
                                ?>
                            </footer>
                        </article>
                        <div class="post-comments">
                            <?php
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
			<?php endwhile; ?>
        </div>
		<?php get_template_part( 'template-parts/section', 'subscribe', array(
			'title' => 'Subscribe for more<span class="highlight-text">.</span>',
			'size'  => 'medium',
		) ); ?>
        <div class="post-navigation-wrap element-spacing small background-gray">
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">Previous post:</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">Next post:</span> <span class="nav-title">%title</span>',
				)
			);
			?>
        </div>
    </main>

<?php
get_footer();
