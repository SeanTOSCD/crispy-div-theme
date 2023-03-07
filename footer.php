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
        <div class="fat-footer">
            <div class="fat-footer-grid">
                <div class="crispy-div-info">
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/branding/crispy-div-logo-color.svg" alt="<?php echo THEME_NAME; ?>" /></a></p>
                    <p class="site-description">Getting started with WordPress is simple. Molding WordPress to your needs can be difficult. We find creative ways to solve that problem. <a href="<?php echo home_url( '/contact/' ); ?>">Reach out</a>.</p>
		            <?php crispydiv_social_links(); ?>
                </div>
                <div class="crispy-div-links">
                    <span class="footer-list-title h6">Services</span>
                    <ul class="crispy-div-links-list">
			            <?php
			            $services = get_posts(
				            array(
					            'post_type' => 'service',
					            'post_status' => 'publish',
					            'posts_per_page' => -1,
				            )
			            );
			            if ( $services ) {
				            foreach ( $services as $service ) {
					            ?>
                                <li><a href="<?php echo get_permalink( $service->ID ); ?>"><?php echo $service->post_title; ?></a></li>
					            <?php
				            }
			            }
			            ?>
                    </ul>
                </div>
                <div class="crispy-div-footer-menu">
                    <span class="footer-list-title h6">Site Links</span>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'menu_id'        => 'footer-menu',
                        )
                    );
                    ?>
                </div>
                <div class="crispy-div-company">
                    <span class="footer-list-title h6">Company</span>
	                <?php
	                wp_nav_menu(
		                array(
			                'theme_location' => 'company-menu',
			                'menu_id'        => 'company-menu',
		                )
	                );
	                ?>
                </div>
            </div>
        </div>
        <div class="site-info">
            <p class="site-copyright"><?php echo '&copy ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ); ?> - A Project by Top One Code LLC</p>
        </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
