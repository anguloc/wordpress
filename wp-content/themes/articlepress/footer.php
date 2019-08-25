<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ArticlePress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info">
				<div class="row">
					<div class="col-md-7">
						<p class="site-copyright">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'articlepress' ) ); ?>">
								<?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( 'Proudly powered by %s', 'articlepress' ), 'WordPress' );
								?>
							</a>
							<span class="sep"> | </span>
								&copy; <?php esc_html( the_date( 'Y' )); ?> <?php esc_html( bloginfo( 'title' ) ) ;?> <?php esc_html_e('Designed by', 'articlepress') ?> <a href="<?php esc_url( __( 'https://themeasia.net', 'articlepress' ) ); ?>"><?php esc_html_e( 'ThemeAsia','articlepress' ) ?></a>
						</p>
					</div>

					<!-- Right -->
					<?php if ( get_theme_mod('footer_socail_icon_show_hide') == 1 ): ?>
					<div class="col-md-5">
						<div class="footer-sociaal-icon">
							<ul>
								<!-- Facebook -->
								<?php if ( !empty( get_theme_mod('footer_socail_icon_facebook') ) ): ?>
								<li><a href="<?php echo esc_url( get_theme_mod('footer_socail_icon_facebook') ); ?>"><i class="fab fa-facebook-f"></i></a></li>
								<?php endif ?>

								<!-- Twitter -->
								<?php if ( get_theme_mod('footer_socail_icon_twitter') ): ?>
									<li><a href="<?php echo esc_url( get_theme_mod('footer_socail_icon_twitter') ); ?>"><i class="fab fa-twitter"></i></a></li>
								<?php endif ?>
								
								<!-- Pinterest -->
								<?php if ( get_theme_mod('footer_socail_icon_pinterest') ): ?>
									<li><a href="<?php echo esc_url( get_theme_mod('footer_socail_icon_pinterest') ); ?>"><i class="fab fa-pinterest-p"></i></a></li>
								<?php endif ?>
							</ul>
						</div>
					</div>
					<?php endif ?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
