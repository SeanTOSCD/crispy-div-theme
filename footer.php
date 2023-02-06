<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crispy_Div
 */

?>

	<footer id="colophon" class="site-footer element-spacing tiny">
        <div class="site-info">
            <p class="site-copyright"><?php echo '&copy ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ); ?> - <?php echo get_crispydiv_tagline(); ?></p>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
