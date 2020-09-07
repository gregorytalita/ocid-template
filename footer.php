<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

	$has_sidebar_4   = is_active_sidebar( 'sidebar-4' );

?>
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<?php if ($has_sidebar_4) {?>
							<div class="copyright-widgets">
								<?php dynamic_sidebar( 'sidebar-4' ); ?>
							</div>
						<?php } ?>

						<p class="footer-copyright">&copy;
							Copyright
							<?php
							echo date_i18n(
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							- Secretaria de Assuntos Estratégicos - Governo da República Federativa do Brasil
						</p><!-- .footer-copyright -->

					</div><!-- .footer-credits -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
		<script defer="defer" src="//barra.brasil.gov.br/barra.js" type="text/javascript"></script>
	</body>
</html>
