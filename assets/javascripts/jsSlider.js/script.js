/*==================================================
        360° COVERFLOW ENGINE
==================================================*/

const track = document.querySelector(".track");
const newCards = [...document.querySelectorAll(".newCard")];

const prev = document.getElementById("prev");
const next = document.getElementById("next");

let current = 0;
let radius = 540;

let newCardAngle = newCards.length ? 360 / newCards.length : 0;

let isDragging = false;
let startX = 0;
let currentRotation = 0;
let velocity = 0;

/*========================================*/

function calculateRadius() {

    if (window.innerWidth < 500)
        radius = 210;

    else if (window.innerWidth < 768)
        radius = 280;

    else if (window.innerWidth < 992)
        radius = 380;

    else if (window.innerWidth < 1400)
        radius = 460;

    else
        radius = 580;

}

calculateRadius();

/*========================================*/

function normalize(v) {

    while (v < 0) v += 360;

    return v % 360;

}

/*========================================*/
/* Shortest signed angular distance a -> b (-180..180) */

function shortestDiff(a, b) {

    let diff = (b - a) % 360;

    if (diff > 180) diff -= 360;
    if (diff < -180) diff += 360;

    return diff;

}

/*========================================*/

function update() {
    if (!track || newCards.length === 0 || newCardAngle === 0) return;

    newCards.forEach((newCard, index) => {

        let angle = (index * newCardAngle) + currentRotation;

        let rad = angle * Math.PI / 180;

        let x = Math.sin(rad) * radius;

        let z = Math.cos(rad) * radius;

        let scale = (z + radius) / (radius * 2);

        let opacity = Math.max(.25, scale);

        let rotateY = -angle;

        newCard.style.transform = `translate(-50%,-50%)translate3d(${x}px,0,${z}px)rotateY(${rotateY}deg)`;

        newCard.style.opacity = opacity;

        newCard.style.zIndex = Math.round(z);

        newCard.style.filter = `blur(${(1 - scale) * 3}px)`;

        newCard.classList.remove(
            "active",
            "left",
            "right"
        );

    });

    /*=====================*/

    let nearest = 0;

    let min = 99999;

    newCards.forEach((newCard, index) => {

        let angle = normalize(index * newCardAngle + currentRotation);

        let diff = Math.abs(angle);

        if (diff > 180) diff = 360 - diff;

        if (diff < min) {

            min = diff;

            nearest = index;

        }

    });

    if (newCards[nearest]) newCards[nearest].classList.add("active");

}

/*========================================*/

function animate() {
    if (!track || newCards.length === 0 || newCardAngle === 0) {
        requestAnimationFrame(animate);
        return;
    }

    if (isDragging || velocity !== 0) {

        velocity *= 0.90;

        if (Math.abs(velocity) < 0.02) {

            velocity = 0;

            /* snap to the nearest newCard so rotation never drifts out
               of alignment after repeated drags/scrolls */
            currentRotation = Math.round(currentRotation / newCardAngle) * newCardAngle;

        }

        currentRotation += velocity;

        update();

    }

    requestAnimationFrame(animate);

}

animate();

/*========================================*/

/* Rotate exactly one newCard using the same momentum curve as
   drag/wheel, instead of an instant jump, so it actually animates */

function rotateNext() {
    velocity = -newCardAngle / 10;
}

function rotatePrev() {
    velocity = newCardAngle / 10;
}

/* Rotate directly to a given newCard index, taking the shortest path */

function goTonewCard(index) {

    let target = -(index * newCardAngle);

    let diff = shortestDiff(currentRotation, target);

    velocity = diff / 10;

}

/*========================================*/

if (next) next.onclick = rotateNext;

if (prev) prev.onclick = rotatePrev;

/*========================================*/

window.addEventListener("keydown", (e) => {

    if (e.key === "ArrowRight")
        rotateNext();

    if (e.key === "ArrowLeft")
        rotatePrev();

});

/*========================================*/
/* Mouse Wheel */
/*========================================*/

if (track) track.addEventListener("wheel", (e) => {

    e.preventDefault();

    velocity -= e.deltaY * .04;

}, { passive: false });

/*========================================*/
/* Mouse Drag */
/*========================================*/

if (track) track.addEventListener("mousedown", (e) => {

    if (
        e.target.closest("button") ||
        e.target.closest("a")
    ) return;

    isDragging = true;

    startX = e.clientX;

    track.classList.add("grabbing");

});

window.addEventListener("mouseup", () => {

    isDragging = false;

    track.classList.remove("grabbing");

});

window.addEventListener("mousemove", (e) => {

    if (!isDragging) return;

    let dx = e.clientX - startX;

    startX = e.clientX;

    velocity += dx * .22;

});

/*========================================*/
/* Touch */
/*========================================*/

if (track) track.addEventListener("touchstart", (e) => {

    if (e.target.closest("a") || e.target.closest("button")) return;

    startX = e.touches[0].clientX;

    isDragging = true;

});

if (track) track.addEventListener("touchmove", (e) => {

    if (!isDragging) return;

    let x = e.touches[0].clientX;

    let dx = x - startX;

    startX = x;

    velocity += dx * .18;

});

if (track) track.addEventListener("touchend", () => {

    isDragging = false;

});

/*========================================*/
/* newCard Click */
/*========================================*/

newCards.forEach((newCard, index) => {

    newCard.addEventListener("click", (e) => {

        // don't hijack clicks on the "Read More" link
        if (e.target.closest("a")) return;

        goTonewCard(index);

    });

});

/*========================================*/
/* Infinite Auto Rotation */
/*========================================*/

// let auto = true;

// setInterval(() => {

//     if (!isDragging && auto) {

//         velocity -= 0.12;

//     }

// }, 16);

/*========================================*/

window.addEventListener("resize", () => {

    calculateRadius();

    update();

});

/*========================================*/
/* Initial */
/*========================================*/

update();


// ===================== Testimonial Slider ============================
const pxltsTrack9045 = document.querySelector(".pxltsTrack9045");
const pxltsItems9045 = document.querySelectorAll(".pxltsItem9045");
if (pxltsTrack9045 && pxltsItems9045.length) {
    for (let i = 0; i < Math.min(2, pxltsItems9045.length); i++) {
        pxltsTrack9045.appendChild(pxltsItems9045[i].cloneNode(true));
    }
    let pxltsCurrent9045 = 0;
    let pxltsVisible9045 = 2;
    function pxltsCount9045() {
        if (window.innerWidth <= 768) {
            pxltsVisible9045 = 1;
        } else if (window.innerWidth <= 992) {
            pxltsVisible9045 = 1;
        } else {
            pxltsVisible9045 = 2;
        }
    }
    function pxltsMove9045() {
        if (!pxltsItems9045[0]) return;
        const width = pxltsItems9045[0].offsetWidth;
        pxltsTrack9045.style.transform = `translateX(-${pxltsCurrent9045 * width}px)`;
    }
    pxltsTrack9045.addEventListener("transitionend", () => {
        const originalSlides = pxltsItems9045.length;
        if (pxltsCurrent9045 >= originalSlides) {
            pxltsTrack9045.style.transition = "none";
            pxltsCurrent9045 = 0;
            const firstSlide = document.querySelector(".pxltsItem9045");
            if (!firstSlide) return;
            const slideWidth = firstSlide.offsetWidth;
            pxltsTrack9045.style.transform =
                `translateX(-${pxltsCurrent9045 * slideWidth}px)`;
            pxltsTrack9045.offsetHeight;
            pxltsTrack9045.style.transition = "transform .6s ease";
        }
    });
    function pxltsNextSlide9045() {
        pxltsCurrent9045++;
        const firstSlide = document.querySelector(".pxltsItem9045");
        if (!firstSlide) return;
        const slideWidth = firstSlide.offsetWidth;
        pxltsTrack9045.style.transition = "transform 1s ease";
        pxltsTrack9045.style.transform =
            `translateX(-${pxltsCurrent9045 * slideWidth}px)`;
    }
    function pxltsPrevSlide9045() {
        pxltsCount9045();
        if (pxltsCurrent9045 <= 0) {
            pxltsCurrent9045 = pxltsItems9045.length - pxltsVisible9045;
        } else {
            pxltsCurrent9045--;
        }
        pxltsMove9045();
    }
    const pxltsNextBtn9045 = document.getElementById("pxltsNext9045");
    const pxltsPrevBtn9045 = document.getElementById("pxltsPrev9045");
    if (pxltsNextBtn9045) pxltsNextBtn9045.onclick = pxltsNextSlide9045;
    if (pxltsPrevBtn9045) pxltsPrevBtn9045.onclick = pxltsPrevSlide9045;
    window.addEventListener("resize", () => {
        pxltsCount9045();
        pxltsMove9045();
    });

    let pxltsAutoSlide9045;

    function pxltsStartAuto9045() {
        pxltsAutoSlide9045 = setInterval(() => {
            pxltsNextSlide9045();
        }, 3500);
    }

    function pxltsStopAuto9045() {
        clearInterval(pxltsAutoSlide9045);
    }

    const pxltsSlider9045 = document.getElementById("pxltsSliderUniverse9045");
    if (pxltsSlider9045) {
        pxltsSlider9045.addEventListener("mouseenter", () => {
            pxltsStopAuto9045();
        });

        pxltsSlider9045.addEventListener("mouseleave", () => {
            pxltsStartAuto9045();
        });
    }

    pxltsStartAuto9045();

    let pxltsSwipeStartX9045 = 0;
    const pxltsViewport9045 = document.querySelector(".pxltsViewport9045");
    if (pxltsViewport9045) {
        pxltsViewport9045.addEventListener("touchstart", (e) => {
            pxltsSwipeStartX9045 = e.touches[0].clientX;
        });
        pxltsViewport9045.addEventListener("touchend", (e) => {
            const endX9045 = e.changedTouches[0].clientX;
            if (pxltsSwipeStartX9045 - endX9045 > 50) {
                pxltsNextSlide9045();
            }
            if (endX9045 - pxltsSwipeStartX9045 > 50) {
                pxltsPrevSlide9045();
            }
        });
    }
    pxltsCount9045();
    pxltsMove9045();
}


document.addEventListener("DOMContentLoaded", function () {

    const slider = document.querySelector(".blogs-slider");
    const track = document.querySelector(".blogs-slider-track");

    const prevButton = document.querySelector(".blogs-slider-prev");
    const nextButton = document.querySelector(".blogs-slider-next");

    const dots = document.querySelectorAll(".blogs-dot");

    if (!slider || !track) {
        return;
    }

    let slides = Array.from(
        track.querySelectorAll(".blogs-slide")
    );

    let currentIndex = 2;
    let isAnimating = false;


    /* -----------------------------------------
       Calculate slide position
       ----------------------------------------- */

    function getSlideSize() {

        if (!slides.length) {
            return 0;
        }

        const slide = slides[0];

        const slideWidth = slide.getBoundingClientRect().width;

        const trackStyle = window.getComputedStyle(track);

        const gap = parseFloat(trackStyle.gap) || 0;

        return slideWidth + gap;
    }


    /* -----------------------------------------
       Update active card
       ----------------------------------------- */

    function updateActive() {

        slides.forEach(function (slide, index) {

            slide.classList.toggle(
                "active",
                index === currentIndex
            );

        });

    }


    /* -----------------------------------------
       Position slider
       ----------------------------------------- */

    function updateSlider(animate = true) {

        const slideSize = getSlideSize();

        if (!slideSize) {
            return;
        }

        /*
         * Keep the third card in the center.
         */
        const containerWidth =
            slider.getBoundingClientRect().width;

        const centerPosition =
            (containerWidth / 2) -
            (slideSize / 2);

        const translateX =
            centerPosition -
            (currentIndex * slideSize);

        if (!animate) {

            track.style.transition = "none";

        } else {

            track.style.transition =
                "transform .7s cubic-bezier(.25,.74,.22,.99)";

        }

        track.style.transform =
            "translate3d(" +
            translateX +
            "px, 0, 0)";

        updateActive();

        updateDots();
    }


    /* -----------------------------------------
       Dots
       ----------------------------------------- */

    function updateDots() {

        dots.forEach(function (dot, index) {

            dot.classList.toggle(
                "active",
                index === (currentIndex - 2)
            );

        });

    }


    /* -----------------------------------------
       NEXT
       ----------------------------------------- */

    function nextSlide() {

        if (isAnimating) {
            return;
        }

        isAnimating = true;

        currentIndex++;

        /*
         * If we reach the last card,
         * move the first card to the end.
         */
        if (currentIndex >= slides.length - 2) {

            track.appendChild(slides.shift());

            slides = Array.from(
                track.querySelectorAll(".blogs-slide")
            );

            currentIndex = slides.length - 3;

            updateSlider(false);

            requestAnimationFrame(function () {

                currentIndex++;

                updateSlider(true);

            });

        } else {

            updateSlider(true);

        }

        setTimeout(function () {

            isAnimating = false;

        }, 750);

    }


    /* -----------------------------------------
       PREVIOUS
       ----------------------------------------- */

    function prevSlide() {

        if (isAnimating) {
            return;
        }

        isAnimating = true;

        /*
         * If we're at the beginning,
         * move last card to the beginning.
         */
        if (currentIndex <= 2) {

            const lastSlide = slides.pop();

            track.insertBefore(
                lastSlide,
                track.firstElementChild
            );

            slides = Array.from(
                track.querySelectorAll(".blogs-slide")
            );

            currentIndex = 3;

            updateSlider(false);

            requestAnimationFrame(function () {

                currentIndex--;

                updateSlider(true);

            });

        } else {

            currentIndex--;

            updateSlider(true);

        }

        setTimeout(function () {

            isAnimating = false;

        }, 750);

    }


    /* -----------------------------------------
       EVENTS
       ----------------------------------------- */

    nextButton.addEventListener(
        "click",
        nextSlide
    );

    prevButton.addEventListener(
        "click",
        prevSlide
    );


    /* -----------------------------------------
       DOT CLICK
       ----------------------------------------- */

    dots.forEach(function (dot, index) {

        dot.addEventListener(
            "click",
            function () {

                currentIndex = index + 2;

                updateSlider(true);

            }
        );

    });


    /* -----------------------------------------
       WINDOW RESIZE
       ----------------------------------------- */

    window.addEventListener(
        "resize",
        function () {

            updateSlider(false);

        }
    );


    /* -----------------------------------------
       INITIAL
       ----------------------------------------- */

    updateSlider(false);

});
