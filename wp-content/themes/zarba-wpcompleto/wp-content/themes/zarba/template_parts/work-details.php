<div class="row col col-md-12">

	<div class="col col-12 mt-4 wow slideInDown">
		<?php the_content(); ?>
	</div>

	<div class="col col-12 wow fadeInUp">
			<?php echo get_the_post_thumbnail( $post->ID, 'extra-large' ); ?>
	</div>	

    <div class="row col col-md-12 see wow fadeInUp">
		<h3 class="">see other plants</h3>

			<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>
    </div>
</div>

<script>
new WOW().init();

jQuery.noConflict();
jQuery(document).ready(function($) {

    $(function(){
        gsap.registerPlugin(TweenMax);

        window.scroll({
            top: 0, 
            left: 0, 
            behavior: 'smooth'
          });
          
        var tl=gsap.timeline();
		tl.from (".client", 1.5, {x:0, y:-400, opacity:0, ease:Power4.easeOut})
		tl.from (".wp-post-image", 1.5, {x:0, y:400, opacity:0, scale:0.5, ease:Power4.easeOut})
        tl.from (".see", 1.5, {x:0, y:-400, opacity:0, ease:Power4.easeOut})
    })
    
});</script>


