<div class="triptico_performance_header">
	<?php 
	$datestart = get_post_meta($post->ID, '_tri_start_perfo', true);
	$dateend = get_post_meta($post->ID, '_tri_end_perfo', true);
	$duracion = get_post_meta($post->ID, '_tri_length_perfo', true);
	?>	
	
	<p>
		<strong><?php echo $post->post_title;?></strong> - <strong><?php echo date('d/m/Y - H:i(e)', $datestart);?></strong> - Duración: <strong><?php echo $duracion;?> minutos</strong> <span id="keycount"></span>
	</p>

</div>
<div id="triptico_performance_wrapper">
	<div id="triptico_performance_visualization">
		<canvas id="triptico_canvas">
			
		</canvas>
		<div id="triptico_canvas_left" class="triptico_box">
			<div class="infoleft">
			<strong>Mano izquierda</strong>
			<div id="infozones_left">
			</div>		
		</div>
		</div>
		<div class="centerzone">
			<div id="triptico_canvas_3d" class="triptico_box"></div>
			<div id="triptico_canvas_rug" class="triptico_box">
				<canvas id="triptico_squares"></canvas>
				<img src="" alt="IndexP" id="image_performance">
			</div>
			<div id="triptico_canvas_rug_right" class="triptico_box"></div>
		</div>
		<div id="triptico_canvas_right" class="triptico_box">
			<div class="inforight">
				<strong>Mano derecha</strong>
				<div id="infozones_right">
				</div>
			</div>
		</div>
	</div>
</div>