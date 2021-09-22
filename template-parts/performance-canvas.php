<div class="triptico_performance_header">
	<?php 
	
	$datestart = get_post_meta($post->ID, '_tri_start_perfo', true);
	$dateend = get_post_meta($post->ID, '_tri_end_perfo', true);
	$duracion = get_post_meta($post->ID, '_tri_length_perfo', true);
	$firstfile = get_post_meta($post->ID, '_tri_picked_sensor_files_left', true)[0];
	$epoch = intval(substr($firstfile, 0, 10));
	$date_file = new DateTime("@$epoch");
	$datestart_format = $date_file->format('j F Y - H:i');
	$frase = get_post_meta($post->ID, '_tri_frase_asociada', true);
	?>	
	
	<p class="perftitle">
		<strong><?php echo $post->post_title;?></strong> - <strong><?php echo $datestart_format;?></strong>
		<span class="keycountzone">
			<span id="keycount"></span>
		</span>
	</p>
	<?php if($frase):?>
		<p class="frase"><?php echo $frase;?></p>
	<?php endif;?>
	
</div>

<div id="triptico_performance_wrapper">
	<div id="loading"><p>...</p></div>
	<div id="triptico_performance_visualization">
		<span class="buttonexpand buttonexpand-mobile" data-expand="centerCanvasWidth">
					<i class="lni lni-frame-expand"></i>
				</span>
		<canvas id="triptico_canvas">
			
		</canvas>
		<div id="triptico_canvas_left" class="triptico_box canvasexpander">
			<div class="infoleft">
				<strong id="leftColorPicker">Mano izquierda</strong>
				<div id="infozones_left">
				</div>
			</div>
			<span class="buttonexpand" data-expand="triptico_canvas_left">
				<i class="lni lni-frame-expand"></i>
			</span>
		</div>
		<div class="centerzone canvasexpander" id="centerCanvasWidth">
			<div id="threeDcanvases">
				<div id="triptico_canvas_3d" class="triptico_box"></div>
				
				<span class="buttonexpand" data-expand="centerCanvasWidth">
					<i class="lni lni-frame-expand"></i>
				</span>

			</div>
			<div id="triptico_bottom">
				<div id="triptico_canvas_rug" class="triptico_box canvasexpander">
					<canvas id="triptico_squares"></canvas>
					<div id="centerimg">
						<div class="centerimgimg"></div>
					</div>

				<!-- <span class="buttonexpand" data-expand="triptico_canvas_rug">
					<i class="lni lni-frame-expand"></i>
				</span> -->

			</div>
			<div id="bottomimgs"></div>

		</div>
	</div>
	<div id="triptico_canvas_right" class="triptico_box canvasexpander">
		<div class="inforight">
			<strong id="rightColorPicker">Mano derecha</strong>
			<div id="infozones_right">
			</div>
		</div>
		<span class="buttonexpand" data-expand="triptico_canvas_right">
			<i class="lni lni-frame-expand"></i>
		</span>
	</div>

</div>