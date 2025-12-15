import Swiper from "swiper";
import {Navigation} from "swiper/modules";
import "swiper/css";
import Masonry from "masonry-layout";
import AOS from "aos";


AOS.init({
    duration:1200,
});

let positionSwiper;
let servicesSwiper;
const DESKTOP_MIN = 992;

if (window.innerWidth >= DESKTOP_MIN) {
    positionSwiper = new Swiper(".positions-swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },

            560:{
                slidesPerView: 2,
                spaceBetween: 10,
            },

            992: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
        },
    });
}

if (window.innerWidth >= DESKTOP_MIN) {
    servicesSwiper = new Swiper(".services-swiper", {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 0,

        navigation: {
            nextEl: ".left-sign",
            prevEl: ".right-sign",
        },
    });

    document.querySelector(".bar .one").addEventListener("click", () => {
        servicesSwiper.slideTo(0);
    });

    document.querySelector(".bar .two").addEventListener("click", () => {
        servicesSwiper.slideTo(1);
    });

    //sto service-section
    const initialBtn = document.querySelector(".bar .one");
        initialBtn.classList.add("active");
        document.querySelectorAll(".bar button").forEach((btn) => {

            btn.addEventListener("click", () => {
                document.querySelectorAll(".bar button").forEach((b) =>
                b.classList.remove("active"));
                btn.classList.add("active");
            });
        });
}


const grid = document.querySelector(".row");
const breakpoint= 992;
    if (grid && window.innerWidth > breakpoint) {
        new Masonry(grid, {
            itemSelector: ".col-4",
            percentPosition: true,
            gutter: 40
        });
    }




