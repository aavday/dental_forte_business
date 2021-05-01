function preloader() {
    var keys = {
        37: 1,
        38: 1,
        39: 1,
        40: 1,
    };

    function preventDefault(e) {
        e = e || window.event;
        if (e.preventDefault) e.preventDefault();
        e.returnValue = false;
    }

    function preventDefaultForScrollKeys(e) {
        if (keys[e.keyCode]) {
            preventDefault(e);
            return false;
        }
    }

    function disableScroll() {
        if (window.addEventListener)
            // older FF
            window.addEventListener("DOMMouseScroll", preventDefault, false);
        window.onwheel = preventDefault; // modern standard
        window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
        window.ontouchmove = preventDefault; // mobile
        document.onkeydown = preventDefaultForScrollKeys;
    }

    function enableScroll() {
        if (window.removeEventListener)
            window.removeEventListener("DOMMouseScroll", preventDefault, false);
        window.onmousewheel = document.onmousewheel = null;
        window.onwheel = null;
        window.ontouchmove = null;
        document.onkeydown = null;
    }
    disableScroll();

    var preloader = document.getElementById("preloader"),
        images = document.images,
        imagesTotalCount = images.length,
        imagesLoadedCount = 0;
    if (images.length == 0) {
        imageLoaded();
    }
    for (var i = 0; i < imagesTotalCount; i++) {
        imageClone = new Image();
        imageClone.onload = imageLoaded;
        imageClone.onerror = imageLoaded;
        imageClone.src = images[i].src;
    }

    function imageLoaded() {
        imagesLoadedCount++;
        if (imagesLoadedCount >= imagesTotalCount) {
            preloader.classList.add("animate__animated");
            preloader.classList.add("animate__fadeOut");
            setTimeout(function () {
                enableScroll();
                preloader.parentNode.removeChild(preloader);
            }, 500);
        }
    }
}

function lazyLoad() {
    $(".lazy").Lazy();
}

function sliders() {
    $("#main-slider").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        items: 1,
        navText: ["", ""],
        autoplay: true,
        autoplayTimeout: 10000,
    });
    $("#partner-slider").owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        navText: ["", ""],
        dots: true,
        items: 3,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });
}

function yandexMap() {
    try {
        let iconUrl = location.origin + "/images/icons/map-icon.png";

        if ($(window).width() <= 992) {
            ymaps.ready(() => {
                const myMap = new ymaps.Map("map-card", {
                    center: [55.756606, 52.435437],
                    zoom: 17,
                });
                const myPlacemark = new ymaps.Placemark(
                    [55.755515, 52.435534],
                    {
                        hintContent: "",
                        balloonContent: "",
                    },
                    {
                        // Опции.
                        iconLayout: "default#image",
                        // Своё изображение иконки метки.
                        iconImageHref: iconUrl,
                        // Размеры метки.
                        iconImageSize: [63, 63],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-35, -65],
                    }
                );
                myMap.behaviors.disable("scrollZoom");
                myMap.geoObjects.add(myPlacemark);
            });
        } else {
            ymaps.ready(() => {
                const myMap = new ymaps.Map("map-card", {
                    center: [55.755588, 52.437834],
                    zoom: 17,
                });
                const myPlacemark = new ymaps.Placemark(
                    [55.755515, 52.435534],
                    {
                        hintContent: "",
                        balloonContent: "",
                    },
                    {
                        // Опции.
                        iconLayout: "default#image",
                        // Своё изображение иконки метки.
                        iconImageHref: iconUrl,
                        // Размеры метки.
                        iconImageSize: [63, 63],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-35, -65],
                    }
                );
                myMap.behaviors.disable("scrollZoom");
                myMap.geoObjects.add(myPlacemark);
            });
        }
    } catch (err) {
        console.log(err);
    }
}

function burgerIcon() {
    document.querySelector(".menu").addEventListener("click", function () {
        if ($(this).is(".active:not(.back)")) {
            $(this).addClass("back");
        } else if ($(this).is(".back")) {
            $(this).removeClass("back");
        } else {
            $(this).addClass("active");
        }
    });
}

function stickyFooter() {
    let height = $("footer").innerHeight();
    $("body").css("margin-bottom", height);
    $("footer").addClass("sticky_footer");
    $(window).on("resize", function () {
        height = $("footer").innerHeight();
        $("body").css("margin-bottom", height);
    });
}

function animation() {
    $.fn.animated = function (inEffect) {
        $(this).each(function () {
            var ths = $(this);
            ths.css("opacity", "0")
                .addClass("animate__animated")
                .waypoint(
                    function (dir) {
                        if (dir === "down") {
                            ths.addClass(inEffect).css("opacity", "1");
                        }
                    },
                    {
                        offset: "90%",
                    }
                );
        });
    };

    $(".slider").animated("animate__fadeIn", "animate__fadeOut");

    $(".about-img").animated("animate__bounceInLeft", "animate__bounceOutLeft");
    $(".about-right").animated(
        "animate__bounceInRight",
        "animate__bounceOutRight"
    );

    $(".services__link").animated("animate__flipInX", "animate__flipOutX");

    $(".advantages__item").animated("animate__fadeIn", "animate__fadeOut");

    $(".partners").animated("animate__zoomIn", "animate__zoomOut");
}

window.addEventListener("DOMContentLoaded", () => {
    sliders();
    stickyFooter();
    lazyLoad();
    preloader();
    burgerIcon();
    yandexMap();
    animation();
});
