<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<main id="primary-home" class="site-main">

        <section class="performance-items">
		<?php 
            $args = array(
                'post_type' => 'performance',
                'numberposts' => -1
            );

            $perfos = get_posts($args);

            if($perfos) {
                foreach($perfos as $perfo) {
                    $imgs = triptico_getperfimgs($perfo->ID);
                    ?>

                        <div class="performance-item-link">
                            <a href="<?php echo get_permalink($perfo->ID);?>">
                            <?php if($imgs):?>
                                <div class="imgs">
                                    <?php for($i = 0; $i < 200; $i++) {
                                        //echo $i%count($imgs);
                                        
                                        $imgurl = $imgs[($i%count($imgs))];
                                        
                                        ?>
                                            <img src="<?php echo $imgurl;?>" alt="<?php echo $img;?>">
                                        <?php
                                    }?>
                                </div>
                            <?php endif;?>
                            
                                <div class="text-info">
                                    <h1><?php echo $perfo->post_title;?></h1>
                                    <?php 
                                    $datestart = get_post_meta($perfo->ID, '_tri_start_perfo', true);
                                    $dateend = get_post_meta($perfo->ID, '_tri_end_perfo', true);
                                    $duracion = get_post_meta($perfo->ID, '_tri_length_perfo', true);
                                    ?>  
                                    
                                    <p>
                                        <strong><?php echo date('d/m/Y - H:i(e)', $datestart);?></strong> - Duración: <strong><?php echo $duracion;?> minutos</strong> <span id="keycount"></span> <span id="keyzone"></span>
                                    </p>
                                </div>
                            </a>

                        </div>

                    <?php
                }
            }
        ?>
        </section>

	</main><!-- #main -->

<?php
get_footer('minimal');