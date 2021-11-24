<?php
/**
 * Template Name: homepage-blank
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@200;300;700&family=Kaisei+Opti:wght@400;700&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a51b616ea9.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>

</head>
<body>


	<?php while ( have_posts() ) : the_post(); ?>

	<div class="container" id="main">
			<div class="col col-10 hero--title">
				<h1><?php the_title();?></h1>
				<!-- <a id="btn-dark-mode" class="btn btn-primary" href="#"> 
					<i class="fas fa-adjust"></i>
				</a> -->
			</div>
	</div>

	<div class="">
		<?php get_template_part( 'loop-templates/content', 'blank' ); ?>
	</div>

	<?php endwhile; // end of the loop. ?>

	<section id="works" class="animation"> <!--inizio modifiche personali specifiche -->

<!--	
	<a href='https://postimg.cc/Th2fVfRr' target='_blank'><img src='https://i.postimg.cc/Th2fVfRr/Risorsa-4.png' border='0' alt='Risorsa-4' class="flower"/></a>		
-->
	<div class="row wow fadeInUp">
					<?php 
						$args = array(
							'post_type' => 'work',
							'posts_per_page' => -1,
						);
						$query = new WP_Query( $args ); 
					?>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<?php get_template_part('loop-templates/work-preview')?>
					<?php 
						endwhile; // end of the loop. 
						wp_reset_query();
					?>
		</div>
	</section>

<section id="contact">
	<div class="col col-12 thanks">
	<a href='https://postimg.cc/tYPS7nLD' target='_blank'><img src='https://i.postimg.cc/tYPS7nLD/plant-1.png' border='0' alt='plant-1' class="plant wow rotateInUpLeft"/></a>
	<a href='https://postimg.cc/RN9fQ3Wg' target='_blank'><img src='https://i.postimg.cc/RN9fQ3Wg/plant-2.png' border='0' alt='plant-2' class="plant wow slideInUp"/></a>	
	<a href='https://postimg.cc/tYPS7nLD' target='_blank'><img src='https://i.postimg.cc/tYPS7nLD/plant-1.png' border='0' alt='plant-1' class="plant wow rotateInUpRight"/></a>
		<h3 class="wow fadeInUp"> Thanks for your support.</h3>
	</div>
</section>


	<?php wp_footer(); ?>
		<div class="col col-12 footer">
			<i class="fas fa-globe-europe"></i>
			<i class="fab fa-pagelines"></i>
		</div>
</body>
</html>
