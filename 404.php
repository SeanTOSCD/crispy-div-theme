<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Crispy_Div
 */

get_header();
crispydiv_page_header( array(
	'corner-accent-color' => 'black-orange',
    'title' => '404, unfortunately.',
) );
?>

    <main id="site-content" class="site-main">
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
	</main>

<?php
get_footer();
