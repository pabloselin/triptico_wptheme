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
                                    $firstfile = get_post_meta($perfo->ID, '_tri_picked_sensor_files_left', true)[0];
                                    $epoch = intval(substr($firstfile, 0, 10));
                                    $date_file = new DateTime("@$epoch");
                                    $datestart_format = $date_file->format('j F Y - H:i');
                                    ?>  
                                    
                                    <p>
                                        <?php echo $datestart_format;?>
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