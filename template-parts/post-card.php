<?php
/**
 * The default template for displaying posts cards
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

?>

<article class="event-card">

	<div class="event-card-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
	<div class="event-card-content">

		<div class="titles">
			<h2 class="title">
				<?php the_title(); ?>
			</h2>

			<p class="subtitle">
				Nome da instituição
			</p>
		</div>

		<div class="details">
			<p>
				Dia 00 de Mês de 0000, <br/>
				em Nome do Local <br/>
				às 00:00 horas
			</p>
		</div>

		<a class="link" href="<?php the_permalink(); ?>">
			Detalhes do evento
		</a>

	</div>

</article>

