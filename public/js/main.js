window.addEventListener("load", () => {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const preloader = document.querySelector("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            setTimeout(() => {
                preloader.classList.add("loaded");
            }, 1000);
            setTimeout(() => {
                preloader.remove();
            }, 2000);
        });
    }

    const mobileNavShow = document.querySelector(".mobile-nav-show");
    const mobileNavHide = document.querySelector(".mobile-nav-hide");

    document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
        el.addEventListener("click", function (event) {
            event.preventDefault();
            mobileNavToogle();
        });
    });

    function mobileNavToogle() {
        document.querySelector("body").classList.toggle("mobile-nav-active");
        mobileNavShow.classList.toggle("d-none");
        mobileNavHide.classList.toggle("d-none");
    }
    document.querySelectorAll("#navbar a").forEach((navbarlink) => {
        if (!navbarlink.hash) return;

        let section = document.querySelector(navbarlink.hash);
        if (!section) return;

        navbarlink.addEventListener("click", () => {
            if (document.querySelector(".mobile-nav-active")) {
                mobileNavToogle();
            }
        });
    });
    const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

    navDropdowns.forEach((el) => {
        el.addEventListener("click", function (event) {
            if (document.querySelector(".mobile-nav-active")) {
                event.preventDefault();
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("dropdown-active");

                let dropDownIndicator = this.querySelector(
                    ".dropdown-indicator"
                );
                dropDownIndicator.classList.toggle("bi-chevron-up");
                dropDownIndicator.classList.toggle("bi-chevron-down");
            }
        });
    });
});
(function () {
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all);
        if (selectEl) {
            if (all) {
                selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
                selectEl.addEventListener(type, listener);
            }
        }
    };

    window.addEventListener("load", () => {
        let portfolioContainer = select(".portfolio-container");
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: ".portfolio-item",
                layoutMode: "fitRows",
            });

            let portfolioFilters = select("#portfolio-flters li", true);
            setTimeout(() => {
                portfolioFilters[0].click();
            }, 500);
            on(
                "click",
                "#portfolio-flters li",
                function (e) {
                    e.preventDefault();
                    portfolioFilters.forEach(function (el) {
                        el.classList.remove("filter-active");
                    });
                    this.classList.add("filter-active");

                    portfolioIsotope.arrange({
                        filter: this.getAttribute("data-filter"),
                    });
                    portfolioIsotope.on("arrangeComplete", function () {
                        AOS.refresh();
                    });
                },
                true
            );
        }
    });

    const portfolioLightbox = GLightbox({
        selector: ".portfolio-lightbox",
    });

    new Swiper(".portfolio-details-slider", {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
    });
    let scrollTopButton = document.getElementById("scroll_top");
    window.onscroll = () => {
        if (scrollY >= 430) {
            scrollTopButton.style = "bottom: 30px;";
        } else {
            scrollTopButton.style = "bottom: -60px;";
        }
    };
    scrollTopButton.onclick = function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    };
    const progressBar = document.querySelector(".progressBar");
    const section = document.querySelector("body");

    const scrollProgressBar = () => {
        let scrollDistance = -section.getBoundingClientRect().top;
        let progressPercentage =
            (scrollDistance /
                (section.getBoundingClientRect().height -
                    document.documentElement.clientHeight)) *
            100;

        let val = Math.floor(progressPercentage);
        progressBar.style.width = val + "%";

        if (val < 0) {
            progressBar.style.width = "0%";
        }
    };

    window.addEventListener("scroll", scrollProgressBar);
    window.addEventListener("load", () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false,
        });
    });
})();
var sections = $("section");
var pageNavbar = $(".navbar");

$(window).on("scroll", function () {
    var currentPosition = $(this).scrollTop() + 200;

    sections.each(function () {
        var top = $(this).offset().top,
            bottom = top + $(this).outerHeight();

        if (currentPosition >= top && currentPosition <= bottom) {
            if (currentPosition <= bottom) {
                pageNavbar.find(".active").removeClass("active");
            }
            pageNavbar
                .find('a[href="#' + $(this).attr("id") + '"]')
                .addClass("active");
        }
        if (currentPosition < 300) {
            $(".nav-menu ul:first li:first").addClass("active");
        }
    });
});

$(".partners-slider").owlCarousel({
    items: 5,
    loop: true,
    rtl: true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 3,
            nav: false,
        },
        1000: {
            items: 5,
        },
    },
});

const observer = lozad();
observer.observe();
