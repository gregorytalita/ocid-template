<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>

	<nav class="main-container" role="navigation">

		<div class="">
			<div class="events-wrapper">
				<?php

					if ( $prev_post ) {
						setup_postdata( $prev_post );
							get_template_part( 'template-parts/post-card');
						wp_reset_postdata();
					}

					?>
					<?php

					if ( $next_post ) {
						setup_postdata( $next_post);
							get_template_part( 'template-parts/post-card');
						wp_reset_postdata();
					}

					?>
			</div>
		</div>

	</nav><!-- .pagination-single -->

	<?php
}
