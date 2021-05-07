function yandexMap() {
  try {
      let iconUrl = location.origin + "/local/templates/main/images/icons/map-icon.png";

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
