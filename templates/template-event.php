<?php
/**
 * Template Name: Events Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
$postsAmount = 4;
$post_list = get_posts( array(
	'orderby'    	=> 'menu_order',
	'sort_order' 	=> 'asc',
	'category'   	=> 9,
	'numberposts' => $postsAmount
) );

$has_sidebar   = is_active_sidebar( 'blog-sidebar-1' );

?>

<main id="site-content" role="main">

	<div class="main-container events-page">

		<div class="">
			<div class="events-wrapper">
				<?php

					if ( $post_list ) {
						foreach ( $post_list as $post ) : setup_postdata( $post );
							get_template_part( 'template-parts/post-card');
						endforeach;
						wp_reset_postdata();
					}

					?>
			</div>

			<?php get_template_part( 'template-parts/load-more'); ?>
		</div>

		<?php if ($has_sidebar) {?>
			<div class="blog-sidebar">
				<?php dynamic_sidebar( 'blog-sidebar-1' ); ?>
			</div>
		<?php } ?>
	</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
