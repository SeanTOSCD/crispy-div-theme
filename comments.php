<?php
/**
 * The template for displaying comments
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) :
		?>
		<span class="comments-title">
			<?php
			$crispydiv_comment_count = get_comments_number();
			if ( '1' === $crispydiv_comment_count ) {
				printf(
					'One thought on &ldquo;%1$s&rdquo;',
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
				/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $crispydiv_comment_count, 'comments title', 'crispydiv' ) ),
					number_format_i18n( $crispydiv_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</span>

		<?php the_comments_navigation(); ?>

		<div class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'div',
                    'avatar_size' => 0,
					'reverse_top_level' => true,
					'short_ping' => true,
				)
			);
			?>
		</div>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments">Comments are closed.</p>
		<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div>