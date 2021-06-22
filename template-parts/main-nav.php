<nav id="main-nav">
	<h1><?php bloginfo('name');?></h1>
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
	?>
</nav>
<div id="menuToggle">==</div>