<?php

/**
 * Created by PhpStorm.
 * User: stiofan
 * Date: 01/02/19
 * Time: 19:52
 */
class BlockStrap_Comments {

	public function __construct() {

//		add_action( 'widgets_init', array( $this, 'register_widgets' ) );
		add_action( 'comment_form_default_fields', array( $this, 'comment_args' ) );
		add_action( 'comment_form_defaults', array( $this, 'comment_form_defaults' ) );


	}

	public function comment_form_defaults( $defaults ) {

//		print_r( $defaults );

		$defaults['comment_field'] = '
<div class="comment-form-comment form-group">
   <label for="comment" class="sr-only sr-only-focusable">' . __( 'Enter your comment here...', 'blockstrap' ) . '</label>
    <textarea class="form-control" id="comment" name="comment" placeholder="' . __( 'Enter your comment here...', 'blockstrap' ) . '"  rows="8" maxlength="65525" required="required"></textarea>
</div>
 ';

		$defaults['fields']['author'] = '
<div class="comment-form-author form-group">
<label for="author" class="sr-only sr-only-focusable">' . __( 'Name', 'blockstrap' ) . '<span class="required">*</span></label>
<input class="required form-control border-gray" id="author" name="author" type="text" value="" placeholder="' . __( 'Name (required)', 'blockstrap' ) . '"  maxlength="245" required=\'required\' />
</div>';

		$defaults['fields']['email'] = '
<div class="comment-form-email form-group">
<label for="email" class="sr-only sr-only-focusable">' . __( "Email", 'blockstrap' ) . '<span class="required">*</span></label>
<input class="required form-control border-gray"" id="email" name="email" type="email" value="" placeholder="' . __( 'Email (required)', 'blockstrap' ) . '" maxlength="100" aria-describedby="email-notes" required=\'required\' />
</div>';

		$defaults['fields']['url'] = '
<div class="comment-form-url form-group">
<label for="url" class="sr-only sr-only-focusable">' . __( "Website", 'blockstrap' ) . '</label>
<input class="required form-control border-gray"" id="url" name="url" type="url" placeholder="' . __( 'Website', 'blockstrap' ) . '" value=""  maxlength="200" />
</div>';

		$defaults['fields']['cookies'] = '
<div class="comment-form-cookies-consent form-group form-check custom-control custom-checkbox">
<input class="custom-control-input" id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" />
<label class="custom-control-label" for="wp-comment-cookies-consent">' . __( 'Save my name, email, and website in this browser for the next time I comment.', 'blockstrap' ) . '</label>
</div>';

		$defaults['class_submit'] .= ' btn btn-primary btn-lg form-control text-white';

		$defaults['submit_field'] = '<div class="form-submit form-group">%1$s %2$s</div>';

		return $defaults;
	}


	public function comment_args( $fields ) {

//		print_r( $fields );

		return $fields;
	}


}

new BlockStrap_Comments();
