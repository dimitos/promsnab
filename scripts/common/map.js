window.initMap = () => {
    ymaps.ready(function () {
        let myMap = new ymaps.Map("map", {
            center: [44.868672, 38.696138],
            zoom: 17,
        }, {
            suppressMapOpenBlock: true, //убирает кнопку КАК ДОБРАТЬСЯ
        });

        let myPlacemark = new ymaps.Placemark(
            [44.868554, 38.698981],
            { hintContent: "ПромТеплоСнаб, Краснодарский край, Северский район, ст. Северская, ул. Комендантская, 98" },
            {
                iconLayout: "default#image",
                iconImageHref: "img/icon-placemark.png",
                iconImageSize: [30, 59],
                iconImageOffset: [-20, -60]
            }
        );

        myMap.geoObjects.add(myPlacemark);
        myMap.behaviors.disable("scrollZoom");
    });
}
