<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'olo' ); ?></p>
<?php return;endif; ?>
<?php if ( have_comments() ) : ?>
		<h3 id="comments-title"><span><?php comments_popup_link(__( 'Leave a reply', 'olo' ), __( '<b>1</b> Reply', 'olo' ), __( '<b>%</b> Replies', 'olo' ) ); ?></span></h3>
	<ol class="commentlist" id="comments">
		<?php wp_list_comments( array( 'callback' => 'olo_comment' ) );?>
			<p id="comments-nav">
				<?php paginate_comments_links('prev_text='.__('Previous', 'olo').'&next_text='.__('Next', 'olo').'');?>
			</p>
			
<?php endif; ?>

			<?php if ( $user_ID ) : ?>

				<?php echo null;?>

				<?php elseif ( '' != $comment_author ): ?>

				<p class="comment-welcomeback"><?php printf(__('Welcome <strong>%s</strong>', 'olo'), $comment_author); ?>
				
				<a href="javascript:olo_toggleCommentAuthorInfo();" id="toggle-comment-author-info">
					<?php _e('(Toggle)', 'olo'); ?>
				</a>

				<script type="text/javascript" charset="utf-8">
					var changeMsg = "<?php echo  esc_js( __('(Toggle)', 'olo') ); ?>";
					var closeMsg = "<?php echo esc_js( __('(Close)', 'olo') ); ?>";
					
					function olo_toggleCommentAuthorInfo() {
						jQuery('#comment-author-info').slideToggle('slow', function(){
							if ( jQuery('#comment-author-info').css('display') == 'none' ) {
								jQuery('#toggle-comment-author-info').text(changeMsg);
							} else {
								jQuery('#toggle-comment-author-info').text(closeMsg);
							}
						});
					}

					jQuery(document).ready(function(){
						jQuery('#comment-author-info').hide();
					});
				</script>
			<?php endif; ?>
<?php 
		$aria_req = ( $req ? " aria-required='true'" : '' );
       	$fields =  array(
            'author' => '<div id="comment-author-info"><p class="comment-form-author"><input id="author" name="author" type="text" value="'.esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /><label for="author">' . __( 'Name', 'olo' ) . '</label> ' . ( $req ? '<span class="required">' . __( '(required)', 'olo' ) . '</span>' : '' ).'</p>',
            'email'  => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /><label for="email">' . __( 'Email', 'olo' ) . '</label>'. ( $req ? '<span class="required">' . __( '(required)', 'olo' ) . '</span>' : '' ).'</p>',
            'url'    => '<p class="comment-form-url">'.'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" />'.'<label for="url">' . __( 'Website', 'olo') . '</label></p></div>',
	);
        $comment_form_args = array(
          	'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
            'comment_field'        => '<p class="comment-form-comment"><textarea aria-required="true" rows="8" cols="70%" name="comment" id="comment" onkeydown="if(event.ctrlKey){if(event.keyCode==13){document.getElementById(\'submit\').click();return false}};"></textarea></p>',
            'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.','olo' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
            'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'olo' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
            'comment_notes_before' => null,
            'comment_notes_after'  => null,
            'id_form'              => 'commentform',
            'id_submit'            => 'submit',
            'title_reply'          => __( 'Leave a Reply', 'olo' ),
            'title_reply_to'       => __( 'Leave a Reply to %s', 'olo'),
            'cancel_reply_link'    => __( 'Cancel reply', 'olo'),
            'label_submit'         => __( 'Post Comment', 'olo'),
    );
    comment_form($comment_form_args);
 ?>
	</ol>
<div class="clear"></div>
<?php /*output Trackbacks and Pingbacks*/ $havepings="pingback"; foreach($comments as $comment){if(get_comment_type() != 'comment' && $comment->comment_approved != '0'){ $havepings = 1; break; }}if($havepings == 1) : ?>
<div id="pings">
	<h3 id="pings-title"><span><a><?php _e('Pingbacks', 'olo'); ?></a></span></h3>
		<ul id="pinglist"><?php wp_list_comments('type=pings&per_page=0&callback=olo_pings'); ?></ul>
</div>

<?php endif; ?>