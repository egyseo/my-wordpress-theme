<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area card">
  <div class="card-body">


	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h5 class="comments-title">
			<?php
				printf( // WPCS: XSS OK.
					/* translators: %d: number of comments. */
					esc_html( _n( '%d commento', '%d commenti', get_comments_number(), 'my-custom-theme' ) ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?>
		</h5><!-- .comments-title -->

		<?php
		the_comments_navigation( array(
			'next_text' => esc_html__( 'Newer Comments', 'my-custom-theme' ),
			'prev_text' => esc_html__( 'Older Comments', 'my-custom-theme' ),
		) ); ?>

		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'          => 'ul',
					'short_ping'     => true,
					'avatar_size'	 => 60,
				) );
			?>
		</ul><!-- .comment-list -->

		<?php
		the_comments_navigation( array(
			'next_text' => esc_html__( 'Newer Comments', 'my-custom-theme' ),
			'prev_text' => esc_html__( 'Older Comments', 'my-custom-theme' ),
		) );

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'I commenti sono chiusi.'); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().
	?>

	<?php if( comments_open() ) : ?>
		<div class="wb-comment-form">
			<?php
				$wp_bootstrap_4_comment_field = '<div class="comment-form-textarea form-group col-md-12"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" class="form-control" placeholder="'. esc_attr__('Inserisci il commento...*', 'wp-bootstrap-4') .'" required></textarea></div>';
				$wp_bootstrap_4_fields =  array(
				  'author' => '<div class="comment-form-author form-group col-md-4"><input id="author" placeholder="'. esc_attr__('Name *', 'wp-bootstrap-4') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30" class="form-control" required /></div>',
				  'email'  => '<p class="comment-form-email form-group col-md-4"><input id="email" placeholder="'. esc_attr__('Email *', 'wp-bootstrap-4') .'" name="email" type="email" value="' . esc_attr( $commenter['comment_author_email'] ) .'" size="30" class="form-control" required /></p>',
				  'url'    => '<p class="comment-form-url form-group col-md-4"><input id="url" placeholder="'. esc_attr__('Website', 'wp-bootstrap-4') .'" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" class="form-control" /></p>',
				);

				comment_form( array(
					'title_reply_before'   => '<h5 class="reply-title">',
					'title_reply_after'    => '</h5>',
					'title_reply'          => esc_html__('Lascia un commento', 'my-custom-theme'),
					'cancel_reply_link'    => esc_html__('Annulla', 'my-custom-theme'),
					'label_submit'         => esc_html__('INVIA', 'my-custom-theme'),
					'class_submit'         => 'submit btn btn-primary comment-submit-btn p-3',
					'submit_field'         => '<div class="form-submit w-100">%1$s %2$s</div>',
					'cancel_reply_before'  => '<small class="wb-cancel-reply">',
					'class_form'           => 'comment-form row align-items-center',
					'comment_notes_before' => '<div class="col-md-12 text-muted wb-comment-notes"><p>' . __( 'Il tuo indirizzo email non sarà pubblicato, I campi obbligatori sono contrassegnati con *', 'my-custom-theme' ) . '</p></div>',
					'comment_notes_after'  => '',
					'comment_field'        => $wp_bootstrap_4_comment_field,
					'fields'               => $wp_bootstrap_4_fields,
				) );
			?>
		</div>
	<?php endif; ?>
</div>
</div><!-- #comments -->
