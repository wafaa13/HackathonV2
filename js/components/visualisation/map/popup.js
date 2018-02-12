function addPopup(map) {
    var element = document.getElementById('popup');

    var popup = new ol.Overlay({
        element: element,
        positioning: 'bottom-center',
        stopEvent: false
    });
    map.addOverlay(popup);


    // display popup on click
    map.on('click', function (evt) {
        var feature = map.forEachFeatureAtPixel(evt.pixel,
            function (feature, layer) {
                return feature;
            });
        if (feature) {
            if (feature.get('type') && feature.get('type') == "Arrêt de bus") {
                var geometry = feature.getGeometry();
                var coord = geometry.getCoordinates();
                popup.setPosition(coord);
                $(element).attr('data-placement', 'top');
                $(element).attr('data-html', true);
                $(element).attr('data-original-title', feature.get('type'));
                $(element).attr('data-content', '<p>' + feature.get('name') + '</p>');
                $(element).popover('show');
            }
            else {
                var geometry = feature.getGeometry();
                var coord = geometry.getCoordinates();
                popup.setPosition(coord);
                $(element).attr('data-placement', 'top');
                $(element).attr('data-html', true);
                $(element).attr('data-content', '<p>Places : </p><code>' + feature.get('dispo') + '/' + feature.get('total') + '</code>');
                $(element).attr('data-original-title', feature.get('name'));
                $(element).popover('show');
            }
        }
        else {
            $(element).popover('destroy');
        }
    });
}