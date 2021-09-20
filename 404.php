<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>
	<main id="primary" class="site-main">

		<article>
			<div class="entry-content">
				<?php 
				$opciones_triptico_options = get_option( 'opciones_triptico_option_name' );
				$notfoundID = $opciones_triptico_options['id_pagina_no_encontrada'];
				if($notfoundID) {
					$content = get_post($notfoundID);
					?>

					<h1><?php echo $content->post_title;?></h1>

					<div class="text">
						<?php echo apply_filters('the_content', $content->post_content);?>
					</div>

					<?php
				} else {
					?>
					<h1>Contenido no encontrado</h1>
					<?php
						}
					?>
				
			</div>
		</article>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
