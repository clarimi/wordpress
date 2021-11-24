<?php

/**
 * Template Name: Pagina base
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
$container = "container";
?>

<?php if (is_front_page()) : ?>
	<?php get_template_part('global-templates/hero'); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col col-md-12 clarice-about">
								<?php the_content(); ?>
							</div>
						</div>



						<div class="servizi-skill">

						<div class="row">
						
							<div class="col col-md-6 ">
								<h2>Servizi</h2>
								<?php

// Check rows exists.
if( have_rows('servizi') ):

    // Loop through rows.
    while( have_rows('servizi') ) : the_row();

        // Load sub field value.
        $immagine = get_sub_field('immagine');
		$testo = get_sub_field('testo');
		
        // Do something...
?>
<div class="row servizio">
									<div class="col-2">	<img src="<?php echo $immagine ?>"/> </div>
									<div class="col-10"><?php echo $testo?></div>
								</div>
<?php
    // End loop.
    endwhile; 
	
endif;
?>
								
							</div>

							<div class="col skill col-md-3">
								<h2>Soft Skill</h2>
								<?php the_field("soft_skill") ?>
							</div>

							<div class="col skill col-md-3">
								<h2>Hard Skill</h2>
								<?php the_field("hard_skill") ?>
							</div>
						</div>
						</div>



					<?php
					endwhile; // end of the loop. 
					wp_reset_query();
					?>




				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>