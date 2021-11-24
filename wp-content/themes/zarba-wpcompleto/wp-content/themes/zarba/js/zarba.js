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
        tl.from (".wp-block-image", 2.5, {x:0, y:-400, opacity:0, ease:Power4.easeOut})
        tl.from (".hero--title", 1, {x:-200, y:0, opacity:0, ease:Power4.easeOut}, "0.8")
        tl.from ("h1", 1, {y:-50, x:0, opacity:0}, "1.3")
        tl.from (".wp-block-quote", 2, {y:-50, opacity:0, ease:Power4.easeOut}, "3.8")
        tl.from (".client", 1.5, {x:0, y:-400, opacity:0, ease:Power4.easeOut})
        tl.from (".see", 1.5, {x:0, y:-400, opacity:0, ease:Power4.easeOut})
    })
    
});


   /*var tl1=gsap.timeline();
        tl1.from (".flower", 2, {x:660, y:-400, opacity:0.5, scale:2, rotate:360, ease:Power4.easeOut}, "3.8")
        tl1.to (".flower", 2, {x:680, y:390, opacity:1, scale:0.5, ease:Power4.easeOut}, "5.2")

        var controller = new ScrollMagic.Controller();
        new ScrollMagic.Scene({
        triggerElement: "#works", // what
        duration: 1500,
        triggerHook: 0 // when
        })
        .setTween(tl1)
        .setPin(".flower")
        .addTo(controller)
        .addIndicators();*/

      

      /*
        const flightPath = {
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
    