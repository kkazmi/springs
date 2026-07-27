/*==================================================
        360° COVERFLOW ENGINE
==================================================*/

const track = document.querySelector(".track");
const newCards = [...document.querySelectorAll(".newCard")];

const prev = document.getElementById("prev");
const next = document.getElementById("next");

let current = 0;
let radius = 540;

let newCardAngle = 360 / newCards.length;

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

    newCards[nearest].classList.add("active");

}

/*========================================*/

function animate() {

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

next.onclick = rotateNext;

prev.onclick = rotatePrev;

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

track.addEventListener("wheel", (e) => {

    e.preventDefault();

    velocity -= e.deltaY * .04;

}, { passive: false });

/*========================================*/
/* Mouse Drag */
/*========================================*/

track.addEventListener("mousedown", (e) => {

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

track.addEventListener("touchstart", (e) => {

    if (e.target.closest("a") || e.target.closest("button")) return;

    startX = e.touches[0].clientX;

    isDragging = true;

});

track.addEventListener("touchmove", (e) => {

    if (!isDragging) return;

    let x = e.touches[0].clientX;

    let dx = x - startX;

    startX = x;

    velocity += dx * .18;

});

track.addEventListener("touchend", () => {

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