<?php
/**
 * Template part for displaying posts
 */

// Check for args
if ( isset( $args ) ) {

	$args = wp_parse_args( $args, array(
        'is-services' => false,
        'is-courses' => false,
		'services-full' => false,
		'services-with-cta' => false,
	) );
}
?>

<div class="grid-item">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'grid-item-content' ); ?>>
	    <?php crispydiv_post_thumbnail(); ?>
        <header class="entry-header">
            <?php
            if ( $args['is-services'] ) {
	            the_title( '<h2 class="entry-title grid-item-title">', '</h2>' );
            } else {
	            the_title( '<h2 class="entry-title grid-item-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            }
            ?>
        </header>
        <div class="entry-content grid-item-description">
			<?php
            if ( $args['is-services'] ) {
                ?>
                <p><?php echo get_field( 'service_description', get_the_ID() ); ?></p>
                <?php
                if ( $args['services-full'] && have_rows( 'features_list' ) ) {
                    ?>
                    <ul>
                        <?php while ( have_rows( 'features_list' ) ) { the_row(); ?>
                            <li><?php echo get_sub_field( 'feature_title' ); ?></li>
                        <?php } ?>
                    </ul>
                    <?php
                }
            } else {
                the_excerpt();
            }
            ?>
        </div>
        <?php
        if ( $args['is-services'] ) {
	        if ( $args['services-with-cta'] ) {
		        $the_slug = get_post_field( 'post_name', get_the_ID() );
		        ?>
                <div class="cta">
			        <?php
			        crispydiv_button( array(
				        'text' => get_field( 'service_cta_text' ),
				        'url' => home_url( 'services' ) . '#' . $the_slug,
				        'classes' => array( 'button', 'small', 'outline' ),
			        ) );
			        ?>
                </div>
	            <?php
            }
        } else {
            ?>
            <div class="cta">
		        <?php
		        crispydiv_button( array(
			        'text' => $args['is-courses'] ? 'Get Started' : 'Keep Reading',
			        'url' => get_permalink(),
			        'classes' => array( 'button', 'purple', 'small', 'outline' ),
		        ) );
		        ?>
            </div>
            <?php
        }
        ?>
    </article>
</div>