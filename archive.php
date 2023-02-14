<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crispy_Div
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
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
	</main>

<?php
get_footer();
