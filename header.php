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
<header>
    <h1 class="site-title">
	<?php if(is_page()):?>
		<?php echo $post->post_title;?>
	<?php else:?>
			<a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
			<?php 
		endif;
	};?>
	</h1>
</header>

<div id="page" class="site">
