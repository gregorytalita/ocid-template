<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

	$has_main_menu   = is_active_sidebar( 'main-menu-widget' );

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="barra-brasil">
			<ul id="menu-barra-temp" style="list-style:none;">
				<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED">
						<a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a>
				</li>
			</ul>
		</div>
		<?php
		wp_body_open();
		?>

		<div class="header-titles">

		<?php
			// Site title or logo.
			twentytwenty_site_logo();

			// Site description.
			twentytwenty_site_description();
		?>

		<?php

		// Check whether the header search is activated in the customizer.
		$enable_header_search = get_theme_mod( 'enable_header_search', true );

		if ( true === $enable_header_search ) {
			get_search_form(
				array(
					'label' => __( 'Buscar no OCID', 'twentytwenty' ),
				)
			);
		}
		?>

		<?php if ($has_main_menu) {?>
			<div class="main-menu-widgets">
				<?php dynamic_sidebar( 'main-menu-widget' ); ?>
			</div>
		<?php } ?>


		</div><!-- .header-titles -->

		<header id="site-header" role="banner" style="background-image: linear-gradient(to right bottom, <?php echo esc_attr(get_theme_mod('cover_template_overlay_background_color')); ?>cc, <?php echo esc_attr(get_theme_mod('cover_template_overlay_text_color')); ?>cc), url('<?php echo esc_url( get_theme_mod( 'customizer_cover_background' ) ); ?>');">

			<div class="header-inner section-inner">

				<div class="header-navigation-wrapper">

					<?php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

					<?php
					}?>

				</div><!-- .header-navigation-wrapper -->

				<div class="header-title">

					<?php
						the_title( '<h1 class="entry-title">', '</h1>' );
					?>

				</div>

			</div><!-- .header-inner -->

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
