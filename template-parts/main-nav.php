<nav id="main-nav">
	<h1><a href="<?php bloginfo('home');?>"><?php bloginfo('name');?></a></h1>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
	?>
</nav>

<div id="infoZone">
	<div class="desktop">
		<h2>Cómo usar la visualización</h2>
		<p><i class="lni lni-frame-expand"></i> Expandir visualización</p>
		<h3><i class="lni lni-mouse"></i> Controles de mouse</h3>
		<p><strong>Click izquierdo y arrastrar: </strong> Rotar visualización central</p>
		<p><strong>Click derecho y arrastrar: </strong> Mover visualización central</p>
		<p><strong>Scroll (ruedita del mouse o trackpad): </strong> Zoom en visualización central</p>
	</div>
	<div class="mobile">
		<h2>Cómo usar la visualización</h2>
		<p><i class="lni lni-frame-expand"></i> Expandir visualización</p>
		<h3><i class="lni lni-mobile"></i> Controles móviles</h3>
		<p><strong>Arrastrar con un dedo: </strong> Rotar visualización central</p>
		<p><strong>Arrastrar con dos dedos: </strong> Mover visualización central</p>
		<p><strong>Pinchar con dos dedos: </strong> Zoom en visualización central</p>
	</div>
</div>

<div id="infoZonemini">
	<div class="desktop">
		<h3><i class="lni lni-mouse"></i> Controles de mouse</h3>
		<p><strong>Click izquierdo y arrastrar: </strong> Rotar visualización central</p>
		<p><strong>Click derecho y arrastrar: </strong> Mover visualización central</p>
		<p><strong>Scroll (ruedita del mouse o trackpad): </strong> Zoom en visualización central</p>
	</div>
	<div class="mobile">
		<h3><i class="lni lni-mobile"></i> Controles móviles</h3>
		<p><strong>Arrastrar con un dedo: </strong> Rotar visualización central</p>
		<p><strong>Arrastrar con dos dedos: </strong> Mover visualización central</p>
		<p><strong>Pinchar con dos dedos: </strong> Zoom en visualización central</p>
	</div>
</div>

<?php if(is_singular('performance')):?>
	
	<?php if(get_post_meta($post->ID, '_tri_picked_audio_files', true)):?>
		<div id="soundToggle" title="activar audio"><i class="lni lni-volume-mute"></i></div>
	<?php endif;?>
	
	<div id="infoToggle">info</div>

<?php endif;?>

<div id="menuToggle">
	<span class="top">menu</span>
	<span class="bottom">===</span>
</div>