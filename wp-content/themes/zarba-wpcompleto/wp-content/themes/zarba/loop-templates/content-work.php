<?php
/**
 * Single post partial template.
 * 
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

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

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header wow fadeInUp">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php get_template_part("template_parts/work-info")?>
	</header><!-- .entry-header -->

<section class="row col col-md-12 wow fadeInUp">
		<?php get_template_part("template_parts/work-details")?>
</section> <!-- .entry-content -->



</article><!-- #post-## -->
</body>