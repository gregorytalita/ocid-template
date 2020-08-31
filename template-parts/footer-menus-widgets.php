<?php
/**
 * Displays the menus and widgets at the end of the main element.
 * Visually, this output is presented as part of the footer element.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$has_footer_menu = has_nav_menu( 'footer' );
$has_social_menu = has_nav_menu( 'social' );

$has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
$has_sidebar_2 = is_active_sidebar( 'sidebar-2' );
$has_sidebar_3   = is_active_sidebar( 'sidebar-3' );

// Only output the container if there are elements to display.
if ( $has_footer_menu || $has_social_menu || $has_sidebar_1 || $has_sidebar_2 ) {
	?>

	<div class="footer-nav-widgets-wrapper">
	<?php if ( $has_sidebar_1 || $has_sidebar_2 || $has_social_menu || $has_sidebar_3 ) { ?>

		<?php if ( $has_sidebar_3 ) { ?>

			<div class="footer-logo">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>

		<?php } ?>


		<div class="footer-content">

			<?php if ( $has_sidebar_2 ) { ?>

				<div class="top-footer-widgets">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>

			<?php } ?>

			<div class="social-widget-footer">

				<?php if ( $has_sidebar_1 ) { ?>

				<div class="footer-widgets">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>

				<?php } ?>

				<?php if ( $has_social_menu ) { ?>


				<nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>">

					<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'social',
								'container'       => '',
								'container_class' => '',
								'items_wrap'      => '%3$s',
								'menu_id'         => '',
								'menu_class'      => 'social-menu-footer',
								'depth'           => 1,
								'link_before'     => '<span class="screen-reader-text">',
								'link_after'      => '</span>',
								'fallback_cb'     => '',
							)
						);
						?>

					</ul>

				</nav>

				<?php } ?>
			</div>

		</div>


	</div>
	<?php } ?>


<?php } ?>
