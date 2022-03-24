ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.315618, 69.260684],
        zoom: 11,
    }, {
        searchControlProvider: 'yandex#search'
    },
);
myMap.geoObjects
.add(new ymaps.Placemark([41.22411341667512, 69.24052571733323], {
}, {
    iconLayout: 'default#image',
    iconImageHref: 'img/marker.svg',
    iconImageSize: [71, 87],
}))

    myMap.behaviors.disable('scrollZoom')


        
     myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
}


