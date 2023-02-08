<?php
/**
 * Blog home
 */

get_header();
crispydiv_page_header( array( 'bg-color' => 'background-gray' ) );
?>

	<main id="site-content" class="site-main">
        <section id="subscribe" class="subscribe-cta background-purple">
            <div class="subscribe-content-wrap element-spacing">
                <div class="subscribe-content">
                    <span class="subscribe-title h3">Stay Informed<span class="highlight-text">.</span></span>
                    <div class="subscribe-description">
                        <p>Join our mailing list and be the first to receive <strong>exclusive news, updates, and insider tips on all things WordPress</strong>. From custom development and plugin integrations to theme development and website design, we cover it all.</p>
                        <div class="subscribe-form-container">
					        <?php echo do_shortcode( '[gravityform id="1" title="false"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                    'classes' => array( 'button' ),
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
			the_posts_navigation();
		endif;
		?>
	</main>

<?php
get_footer();
