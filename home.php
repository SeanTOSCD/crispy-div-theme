<?php
/**
 * Blog home
 */

get_header();

crispydiv_page_header( array(
    'bg-color' => 'background-purple',
    'corner-accent-color' => 'white-orange',
    'title' => 'Crispy Reads',
    'description' => 'Learn more about WordPress, web design, web development, and our favorite WordPress plugins and themes. Be sure to engage in the comments section!'
) );
?>

<!--    <section class="content-filter-section background-gray">-->
<!--        <div class="inner small">-->
<!--            <span class="h5">Find the content you're looking for.</span>-->
<!--            <div class="content-filter-grid general-grid large">-->
<!--                <div class="facetwp-filter">-->
<!--                    <span class="content-filter-title subdued-title">Filter by Category</span>-->
<!--                    <div class="content-filter-controls">-->
<!--		                --><?php //echo do_shortcode( '[facetwp facet="categories"]' ); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="search-filter">-->
<!--                    <span class="element-lead-icon colored">-->
<!--                    <span class="content-filter-title subdued-title">Search Content</span>-->
<!--                    --><?php //echo get_search_form(); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

	<main id="site-content" class="site-main">
		<?php if ( have_posts() ) : ?>
            <div class="blog-grid general-grid large">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'grid-item' );
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
