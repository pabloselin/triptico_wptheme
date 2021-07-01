<div class="triptico_performance_header">
	<?php 
	
	$datestart = get_post_meta($post->ID, '_tri_start_perfo', true);
	$dateend = get_post_meta($post->ID, '_tri_end_perfo', true);
	$duracion = get_post_meta($post->ID, '_tri_length_perfo', true);
	$firstfile = get_post_meta($post->ID, '_tri_picked_sensor_files_left', true)[0];
    $epoch = intval(substr($firstfile, 0, 10));
    $date_file = new DateTime("@$epoch");
    $datestart_format = $date_file->format('j F Y - H:i');
	
	?>	
	
	<p>
		<strong><?php echo $post->post_title;?></strong> - <strong><?php echo $datestart_format;?></strong> </strong> <span id="keycount"></span> <span id="keyzone"></span>
	</p>
</div>

<div id="triptico_performance_wrapper">
	<div id="loading"><p>...</p></div>
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
			<div id="threeDcanvases">
				<div id="triptico_canvas_3d" class="triptico_box"></div>
			</div>
			<div id="triptico_bottom">
				<div id="triptico_canvas_rug" class="triptico_box">
					<canvas id="triptico_squares"></canvas>
					<div id="centerimg">
						<div class="centerimgimg"></div>
					</div>
				</div>
				<div id="bottomimgs"></div>
			</div>
		</div>
		<div id="triptico_canvas_right" class="triptico_box">
			<div class="inforight">
				<strong>Mano derecha</strong>
				<div id="infozones_right">
				</div>
			</div>
		</div>
	</div>