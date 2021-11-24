new WOW().init();

var $ = jQuery;

$(window).load(function() {
    gsap.registerPlugin(ScrollTrigger);

    gsap.to(".work-main-image", { y: 0, opacity: 1, duration: 1, delay: 2.5, startAt: { y: 100 } })
    gsap.to("#works", { y: 0, opacity: 1, duration: 1, delay: 2.5, startAt: { y: 100 } })
    gsap.to(".clarice-about", { y: 0, opacity: 1, duration: 1.5, delay: 2.5, startAt: { y: 100 } })


    gsap.to(".work-testo", {
        y: 0,
        opacity: 1,
        duration: 1.5,
        startAt: { y: 100 },
        scrollTrigger: {
            trigger: ".work-testo",
            /* start: "top 80%",*/
            /*  markers: true, */
            toggleActions: "play none none none"
        },
    });

    gsap.to(".entry-attributi", {
        y: 0,
        opacity: 1,
        duration: 1.5,
        startAt: { y: 100 },
        scrollTrigger: {
            trigger: ".entry-attributi",
            /* start: "top 80%", */
            /*  markers: true, */


            toggleActions: "play none none none"
        },
    });

    gsap.to(".servizi-skill", {
        y: 0,
        opacity: 1,
        duration: 1.5,
        startAt: { y: 100 },
        scrollTrigger: {
            trigger: ".servizi-skill",
            start: "top 90%",
            /* markers: true,*/
            toggleActions: "play none none none"
        },
    });

    gestisciCursore();


});

function gestisciCursore() {
    let currentCursorPos;
    const cursorEl = document.querySelector("#cursor");
    const cursorImageEl = document.querySelector('#cursor > img');

    if (cursorEl == null) {
        return;
    }

    $(window).on('mousemove', function(event) {
        currentCursorPos = { x: event.clientX, y: event.clientY + window.scrollY };

        if (document.querySelector(".work-preview .image a:hover")) {
            cursorEl.style.transform = `translate(${currentCursorPos.x}px, ${currentCursorPos.y}px)`;
            cursorImageEl.style.opacity = "1"
            cursorEl.style.display = "inline-block"
        } else {
            cursorEl.style.display = "none"
        }
    });
}