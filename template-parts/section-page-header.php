<?php
/**
 * Page header section
 */


// Bail if the page header is hidden
if ( get_field( 'page_header_hide', get_the_ID() ) ) {
	return;
}

// Get the page header args and set defaults
if ( isset( $args ) ) {

    $args = wp_parse_args( $args, array(
        'bg-color' => 'background-gray',
        'corner-accent-color' => 'black-orange',
        'title' => get_the_title( get_the_ID() ),
        'title-class' => 'h1',
        'title-label' => '',
        'description' => '',
    ) );
}

// Build full class name for corner accent
$corner_accent_classes = '';
if ( ! empty( $args['corner-accent-color'] ) ) {
	$corner_accent_classes = ' corner-accent ' . $args['corner-accent-color'];
}
?>

<section class="page-header <?php echo $args['bg-color'], $corner_accent_classes; ?>">
	<div class="inner medium">
		<h1 class="page-header-title <?php echo $args['title-class']; ?>">
            <?php if ( ! empty( $args['title-label'] ) ) { ?>
                <span class="page-header-title-label"><?php echo $args['title-label']; ?></span>
            <?php } ?>
            <?php echo $args['title']; ?>
        </h1>
		<?php if ( is_singular( 'post' ) ) { ?>
            <div class="entry-meta">
                <span class="posted-on"><?php echo crispydiv_posted_on(), crispydiv_posted_by(); ?></span>
            </div>
		<?php } ?>
		<?php
            if ( ! empty( $args['description'] ) ) {
                ?>
                <div class="page-header-description">
                    <div class="page-header-description-inner">
                        <?php echo $args['description']; ?>
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
                <?php
            }

            if ( is_search() ) {
                ?>
                <div class="page-header-description">
                    <?php
                    if ( have_posts() ) {
                        ?>
                        <p>Success! Explore the content below, or try searching again.</p>
                        <?php
                    } else {
                        ?>
                        <p>Nothing matched your search terms. Try again with different keywords.</p>
                        <?php
                    }
                    ?>
                </div>
                <?php get_search_form(); ?>
                <?php
            }

            if ( is_404() ) {
                ?>
                <div class="page-header-description">
                    <p>The page you are looking for does not exist. Try search.</p>
                </div>
                <?php
                get_search_form();
            }
        ?>
	</div>
</section>