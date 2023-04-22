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
<section id="subscribe" class="subscribe-cta background-purple">
	<div class="subscribe-content-wrap element-spacing <?php echo $size; ?> corner-accent white-orange">
		<div class="subscribe-content">
			<span class="subscribe-title h1"><?php echo $title; ?></span>
			<div class="subscribe-description">
				<p>Join our mailing list and be the first to receive <strong>exclusive news, updates, and insider tips on all things WordPress</strong>. From custom development and plugin integrations to theme development and website design, we cover it all.</p>
				<div class="subscribe-form-container">
					<?php gravity_form( 'Subscribe', false, false, false, '', true ); ?>
				</div>
			</div>
		</div>
	</div>
</section>