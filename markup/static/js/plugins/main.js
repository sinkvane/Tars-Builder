// Lazy Load изображений

if (document.querySelector(".lazy")) {
    let lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
    });
}

// Инициализация свайпера

// let indexSlider = new Swiper(".index-slider", {
//     effect: "fade",
//     loop: true,
//     virtualTranslate: true,
//     fadeEffect: { crossFade: true },
//     // speed: 2000,
//     autoplay: {
//         delay: 3000,
//     },
//     pagination: {
//         el: ".index-pagination",
//         clickable: true,
//     },
//     slidersPerView: 1,
//     navigation: {
//         nextEl: ".index-button-next",
//         prevEl: ".index-button-prev",
//     },
// });
