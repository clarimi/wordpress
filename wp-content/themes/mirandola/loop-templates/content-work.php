<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

	

	</header><!-- .entry-header -->

	<div class="image work-main-image mb-4 text-center entry-image">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	

	

	<div class="entry-content">
		
	<div class="work-testo">
		<?php the_content(); ?>
		</div>

		<?php get_template_part("loop-templates/template_parts/work-info") ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->
<?php
$video = get_field("video");
if($video):
?>
	<div class="video">
		<h3>video</h3>
		<?php the_field("video"); ?>
	</div>
<?php endif; ?>

<?php 
$images = get_field('gallery');
if( $images ): ?>
    <div id="carousel" class="flexslider">
        <ul class="slides">
            <?php foreach( $images as $image ): ?>
                <li>
                    <img style="max-width: 100px" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="Thumbnail of <?php echo esc_url($image['alt']); ?>" />
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>


	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
