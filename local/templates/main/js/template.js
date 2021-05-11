var anchors = document.querySelectorAll('.header .navbar-nav .nav-link');
var navbar = document.querySelector('.header .navbar-collapse');
var menu = document.querySelector('.header .menu');

anchors.forEach(anchor => {
    anchor.addEventListener('click', event => {
        event.preventDefault();
        var margin = parseInt(getComputedStyle(main).marginTop);
        var section = document.querySelector(anchor.getAttribute('href').replace('/', '.'));
        var bodyRect = document.body.getBoundingClientRect().top;
        var sectionRect = section.getBoundingClientRect().top;
        var sectionPosition = sectionRect - bodyRect;
        var marginPosition = sectionPosition - margin;

        if (navbar.classList.contains('show')) {
            navbar.classList.remove('show');
            menu.classList.toggle('back');
        }

        scrollTo({
            top: marginPosition,
            behavior: 'smooth'
        });
    });
});

function yandexMap() {
  try {
      let iconUrl = location.origin + "/local/templates/main/images/icons/map-icon.png";

      if ($(window).width() <= 992) {
          ymaps.ready(() => {
              var myMap = new ymaps.Map("map-card", {
                  center: [55.756606, 52.435437],
                  zoom: 17,
              });
              var myPlacemark = new ymaps.Placemark(
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
              var myMap = new ymaps.Map("map-card", {
                  center: [55.755588, 52.437834],
                  zoom: 17,
              });
              var myPlacemark = new ymaps.Placemark(
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

$(function() {
  $('.callback-request').submit(function(e) {
    e.preventDefault();
    $.ajax({
        url: '/ajax/requests.php',
        type: 'post',
        data: $('.callback-request').serialize(),
        dataType: 'json',
        success: function() {
          alert('Спасибо, ваша заявка отправлена, ожидайте звонка!');
          location.reload();
        }
    });
  });
});
