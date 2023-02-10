<?php
/**
 * Page header section
 */

if ( get_field( 'page_header_hide', get_the_ID() ) ) {
	return;
}

$the_title = get_the_title( get_the_ID() );
$title_class = 'h1';
$the_description = '';

if ( is_home() ) {

	$custom_title = get_field( 'blog_title', 'options' );
	$the_title = $custom_title ? $custom_title : $the_title;

	$custom_description = get_field( 'blog_description', 'options' );
	$the_description = $custom_description ? $custom_description : $the_description;

} else if ( is_archive() ) {

    $queried_object_name_plural = get_queried_object()->name . 's';

	$custom_title = get_field( $queried_object_name_plural . '_title', 'options' );
	$the_title = $custom_title ? $custom_title : $the_title;
	if ( get_field( $queried_object_name_plural . '_small_title', 'options' ) ) {
		$title_class = 'h4';
	}

	$custom_description = get_field( $queried_object_name_plural . '_description', 'options' );
	$the_description = $custom_description ? $custom_description : $the_description;

} else if ( is_page() && ! is_home() ) {

	$custom_title = get_field( 'page_header_title', get_the_ID() );
	$the_title = $custom_title ? $custom_title : $the_title;
    if ( get_field( 'page_header_small_title', get_the_ID() ) ) {
	    $title_class = 'h4';
    }

	$custom_description = get_field( 'page_header_description', get_the_ID() );
	$the_description = $custom_description ? $custom_description : $the_description;
}

/**
 * Background color
 *
 * 1. Set from crispydiv_page_header() function
 * 2. Set from page edit screen
 * 3. Default
 */
$background_color = get_field( 'page_header_background_color', get_the_ID() );
$background_color_class = '';
if ( ! empty( $args['bg-color'] ) ) {
	$background_color_class = $args['bg-color'];
} else if ( $background_color && 'default' !== $background_color ) {
	$background_color_class = $background_color;
}
?>

<section class="page-header <?php echo $background_color_class; ?>">
	<div class="inner medium">
		<h1 class="page-header-title <?php echo $title_class; ?>"><?php echo $the_title; ?></h1>
		<?php if ( $the_description ) { ?>
			<div class="page-header-description">
				<div class="page-header-description-inner">
					<?php echo $the_description; ?>
				</div>
                <?php if ( is_post_type_archive( 'service' ) ) { ?>
                    <div class="jump-to-section">
                        <select id="jump-menu" onchange="location = this.options[this.selectedIndex].value;">
                            <option value="#">Select a Service</option>
                            <?php
                            // Get all services by title
                            $services = get_posts( array(
                                'post_type' => 'service',
                                'posts_per_page' => -1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            ) );
                            foreach ( $services as $service ) {
                                $service_title = $service->post_title;
                                $service_slug = $service->post_name;
                                ?>
                                <option value="#<?php echo $service_slug; ?>"><?php echo $service_title; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                <?php } ?>
			</div>
		<?php } ?>
	</div>
</section>