<?php // Subscribe CTA

// Template args
$title = 'Stay Informed';
if ( ! empty( $args['title'] ) ) {
    $title = $args['title'];
}

$size = 'small';
if ( ! empty( $args['size'] ) ) {
    $size = $args['size'];
}
?>
<section id="subscribe" class="subscribe-cta background-purple" style="background-image: linear-gradient( to right, rgba(52, 22, 113, 1) 0%, rgba(52, 22, 113, 1) 10%, rgba(52, 22, 113, 0.8) 100% ), url(<?php echo THEME_IMAGES . 'annie-spratt-subscribe-unsplash.png'; ?>");">
	<div class="subscribe-content-wrap element-spacing <?php echo $size; ?> corner-accent white-orange">
		<div class="subscribe-content">
			<span class="subscribe-title <?php echo is_home() ? 'h1' : 'h3'; ?>"><?php echo $title; ?></span>
			<div class="subscribe-description">
				<p>Join our mailing list and be the first to receive <strong>exclusive news, updates, and insider tips on all things WordPress</strong>. From custom development and plugin integrations to theme development and website design, we cover it all.</p>
				<div class="subscribe-form-container">
					<?php gravity_form( 'Subscribe', false, false, false, '', true ); ?>
				</div>
			</div>
		</div>
	</div>
</section>