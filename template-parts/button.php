<?php // Standard button output

if ( isset( $args ) ) {

    $args = wp_parse_args( $args, array(
        'text' => 'Learn More',
        'url' => '#',
        'classes' => array( 'button' ),
        'alt_link_text' => '',
        'alt_link_url' => '',
        'alt_link_classes' => array( 'secondary-cta' ),
    ) );
}
?>

<a href="<?php echo $args['url']; ?>"<?php echo ' ' . ! empty( $args['classes'] ) ? 'class="' . implode( ' ', $args['classes'] ) . '"' : ''; ?>><?php echo $args['text']; ?></a>
<?php if ( ! empty( $args['alt_link_text'] ) && ! empty( $args['alt_link_url'] ) ) { ?>
    <br>
    <a href="<?php echo $args['alt_link_url']; ?>"<?php echo ' ' . ! empty( $args['alt_link_classes'] ) ? 'class="' . implode( ' ', $args['alt_link_classes'] ) . '"' : ''; ?>><?php echo $args['alt_link_text']; ?></a>
<?php } ?>
