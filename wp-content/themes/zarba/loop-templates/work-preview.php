<div class="col-lg-4 col-sm-6 col-sm-6 col-xs-6 wow fadeInUp">		
	<div class="image">

	<a href="<?php echo get_permalink(); ?>">
		<?php print get_the_post_thumbnail() ?>
	</a>

	<h2 class="title"> 
		<?php print get_the_title()?>
	</h2>

	</div>
</div>	

<!--
<script>
new WOW().init();

jQuery.noConflict();
jQuery(document).ready(function($) {

    $(function(){
        gsap.registerPlugin(TweenMax);
 


	var tl=gsap.timeline();
        tl.from (".flower", 2, {x:660, y:-400, opacity:0.5, scale:2, rotate:360, ease:Power4.easeOut}, "3.8")
        tl.to (".flower", 4, {x:680, y:390, opacity:1, scale:0.5, ease:Power4.easeOut},)

        var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
        triggerElement: "#works", // what
        duration: 80,
        triggerHook: onLeave // when
        })
        .setTween(tl)
        .setPin("#works")
        .addTo(controller)
		.addIndicators();
		
	});

      

      
        /*const flightPath = {
            curviness: 2,
            autoRotate: true,
            values: [
              {x: 200, y: 50},
              {x: 500, y: 100},
              {x: 600, y:-50},
              {x: 200, y:25},
              { x:600, y:150 },
              {x: window.innerWidth + 300, y: 200}
            ]
          }
          
        const tween = new TimelineLite();
          
          tween.add(
          TweenLite.to(".flower", 1, {
            bezier: flightPath,
            ease: Power1.easeInOut
          })
                   
          );
          
          const controller = new ScrollMagic.Controller();
          
          const scene = new ScrollMagic.Scene({
            triggerElement: '#work',
            duration: 2500, 
            triggerHook: 0
          })
          
          .setTween(tween)
          .setPin('#work')
          .addTo(controller)
          .addIndicators()
          
         */
		

		});

    
		</script>

		-->