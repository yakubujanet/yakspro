const slider = document.querySelector(".testimonial-slider");
const track = document.querySelector(".testimonial-track");
const cards = [...document.querySelectorAll(".testimonial-card")];

let currentIndex = 0;
let cardsPerView = 3;

let isDragging = false;
let startX = 0;
let currentX = 0;
let startTranslate = 0;


function getCardsPerView() {
    if (window.innerWidth <= 600) return 1;
    if (window.innerWidth <= 900) return 2;
    return 3;
}


function updateCardsPerView() {
    cardsPerView = getCardsPerView();

    const maxIndex = Math.max(
        0,
        cards.length - cardsPerView
    );

    currentIndex = Math.min(currentIndex, maxIndex);

    updateSlider();
}


function updateSlider() {
    if (!cards.length) return;

    const cardWidth = cards[0].getBoundingClientRect().width;

    const gap =
        window.innerWidth <= 600 ? 0 : 20;

    const move =
        currentIndex * (cardWidth + gap);

    track.style.transform =
        `translate3d(-${move}px, 0, 0)`;
}


/* -------------------------
   DRAG / SWIPE
------------------------- */

slider.addEventListener("pointerdown", (e) => {

    isDragging = true;

    startX = e.clientX;

    const matrix =
        new DOMMatrix(getComputedStyle(track).transform);

    startTranslate = matrix.m41;

    track.style.transition = "none";

    slider.setPointerCapture(e.pointerId);

    slider.classList.add("is-dragging");
});


slider.addEventListener("pointermove", (e) => {

    if (!isDragging) return;

    currentX = e.clientX;

    const difference = currentX - startX;

    track.style.transform =
        `translate3d(${startTranslate + difference}px, 0, 0)`;
});


slider.addEventListener("pointerup", (e) => {

    if (!isDragging) return;

    isDragging = false;

    slider.releasePointerCapture(e.pointerId);

    slider.classList.remove("is-dragging");

    track.style.transition = "transform 0.45s ease";

    const difference = currentX - startX;

    const threshold = 50;

    if (difference < -threshold) {

        nextTestimonial();

    } else if (difference > threshold) {

        previousTestimonial();

    } else {

        updateSlider();

    }
});


slider.addEventListener("pointercancel", () => {

    isDragging = false;

    track.style.transition = "transform 0.45s ease";

    updateSlider();

});


function nextTestimonial() {

    const maxIndex =
        Math.max(0, cards.length - cardsPerView);

    if (currentIndex < maxIndex) {

        currentIndex++;

    } else {

        currentIndex = 0;

    }

    updateSlider();
}


function previousTestimonial() {

    const maxIndex =
        Math.max(0, cards.length - cardsPerView);

    if (currentIndex > 0) {

        currentIndex--;

    } else {

        currentIndex = maxIndex;

    }

    updateSlider();
}


/* -------------------------
   RESIZE
------------------------- */

window.addEventListener("resize", () => {

    updateCardsPerView();

});


updateCardsPerView();