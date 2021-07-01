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
<div id="menuToggle">
	<span class="top">menu</span>
	<span class="bottom">===</span>
</div>