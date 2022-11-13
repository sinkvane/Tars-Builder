// Lazy Load изображений

// if (document.querySelector(".lazy")) {
//     let lazyLoadInstance = new LazyLoad({
//         elements_selector: ".lazy"
//     });
// }

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

// Маска для телефона
// let inputs = document.querySelectorAll('input[type="tel"]');
// let im = new Inputmask('+7 (999) 999-99-99');
// im.mask(inputs);


// Валидация различных полей ввода

// function validateForms(selector, rules) {
//     new window.JustValidate(selector, {
//         rules: rules,
//         submitHandler: function (form, values, ajax) {
//             console.log(form);

//             let formData = new FormData(form);

//             fetch("send.php", {
//                 method: "POST",
//                 body: formData
//             })
//                 .then(function(data) {
//                     console.log(data);
//                     console.log('Отправлено');
//                     form.reset();
//                 });
//         }
//     });
// }

// validateForms('.form', { email: { required: true, email: true }, fio: { required: true }, tel: { required: true } });
