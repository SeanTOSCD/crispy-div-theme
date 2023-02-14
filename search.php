<?php
/**
 * Search results
 */

get_header();
crispydiv_page_header( array(
    'bg-color' => 'background-gray',
    'corner-accent-color' => 'black-orange',
) );
?>

	<main id="site-content" class="site-main">
		<?php
        if ( have_posts() ) :
            ?>
			<div class="blog-grid general-grid large">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );
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
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
		?>
	</main>

<?php
get_footer();