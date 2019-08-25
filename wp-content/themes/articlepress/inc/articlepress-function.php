<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ThemeAsia
 */


function articlepress_change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}
add_filter( 'get_custom_logo', 'articlepress_change_logo_class' );

	// Comment Reply Scripts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
// define the comment_form_submit_button callback
function articlepress_filter_comment_form_submit_button( $submit_button, $args ) {
    // make filter magic happen here...
    $submit_before = '<div class="form-button">';
    $submit_button = '<button class="btn btn-blog form-btn" name="submit" type="submit" id="submit" >'.esc_html__('Post Comment', 'articlepress').' <i class="fas fa-arrow-right"></i></button>';
    $submit_after = '</div>';
    return $submit_before . $submit_button . $submit_after;
};
// add the filter
add_filter( 'comment_form_submit_button', 'articlepress_filter_comment_form_submit_button', 10, 2 );



// Comment form input fields
function articlepress_comment_form_default_fields( $fields ) {

    $commenter = wp_get_current_commenter();
    $req       = get_option( 'require_name_email' );
    $aria_req  = $req ? "aria-required='true'" : '';

    $fields['author'] =
        '<p class="comment-form-author">
            <input class="form-control" id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", "articlepress" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
        '" size="30" ' . $aria_req . ' />
        </p>';

    $fields['email'] =
        '<p class="comment-form-email">
            <input class="form-control" id="email" name="email" type="email" placeholder="' . esc_attr__( "Email Address", "articlepress" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
        '" size="30" ' . $aria_req . ' />
        </p>';

    $fields['url'] =
        '<p class="comment-form-url">
            <input class="form-control" id="url" name="url" type="url"  placeholder="' . esc_attr__( "Website URL", "articlepress" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
        '" size="30" />
            </p>';

    return $fields;


}
add_filter( 'comment_form_default_fields', 'articlepress_comment_form_default_fields' );



// Comment Textarea 
function articlepress_comment_form_field_comment( $comment_field ) {

  $comment_field = '<p class="comment-form-comment">
            <textarea class="form-control" required id="comment" name="comment" placeholder="' . esc_attr__( "Enter comment here...", "articlepress" ) . '" cols="45" rows="8" aria-required="true"></textarea>
        </p>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'articlepress_comment_form_field_comment' );


// Custom Search Form
function articlepress_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '" >
        <div class="form-grop">
	    	<input class="search-input" type="search" value="' . get_search_query() . '" name="s" class="search-field" placeholder="' . esc_attr__( 'Search Here', 'articlepress' ) . '" required />
            <button type="submit" id="search-submit" class="articlepress-search-form search"></button>
        </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'articlepress_search_form', 100 );