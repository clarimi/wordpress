<?php
/**
 * Template Name: homepage1
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$container = "container";
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">


				<main class="site-main" id="main" role="main">

					

					<section id="works">
					<div class="row">
					<?php
					 $args = array(  
						'post_type' => 'work',
						'posts_per_page' => -1, 
					);
					$query = new WP_Query( $args ); 
					?> 

<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<?php get_template_part("loop-templates/template_parts/work-preview") ?>
<?php endwhile; // end of the loop. 
wp_reset_query();
?>
</div>

					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<div id="cursor"><img alt="Cursor Hand" src="./wp-content/themes/mirandola/css/img/show.svg"/></div>

<?php get_footer(); ?>
