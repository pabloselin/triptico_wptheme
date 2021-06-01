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

get_header('minimal');
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
                    ?>

                        <div class="performance-item-link">
                            <a href="<?php echo get_permalink($perfo->ID);?>">
                                <?php echo $perfo->post_title;?>
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