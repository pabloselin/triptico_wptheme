<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/main-nav');?>

<?php if(!is_singular('performance')){?>
<header id="site-header">
    <h1 class="site-title">
	<?php if(is_page()):?>
		<?php echo $post->post_title;?>
	<?php else:?>
			<a href="<?php bloginfo('url');?>"><?php bloginfo('name');?> <?php if(is_home()):  echo ' <span> ' . get_bloginfo('description') . '</span>'; endif;?></a>
			<?php 
		endif;
	};?>
	</h1>
	
	<?php if(is_home()):
		$opciones_triptico_options = get_option( 'opciones_triptico_option_name' );
		?>
		<h2 class="desc-es"><?php echo $opciones_triptico_options['descripcin_secundaria_para_pgina_de_inicio_0'];?> <a href="<?php echo $opciones_triptico_options['link_2']?>">[saber más]</a></h2>
		<h2 class="desc-en"><?php echo $opciones_triptico_options['descripcin_secundaria_para_pgina_de_inicio_english_1'];?> <a href="<?php echo $opciones_triptico_options['link_2']?>">[know more]</a></h2>
	<?php endif;?>
</header>

<div id="page" class="site">
