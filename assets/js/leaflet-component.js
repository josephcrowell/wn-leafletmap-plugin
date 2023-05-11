


document.addEventListener('DOMContentLoaded', function(event) {
    let leafletMapEl = document.getElementById('leaflet-map');

    if(leafletMapEl) {
        let leafletMap = L.map(
            leafletMapEl,
            {
                center: [parseFloat(leafletMapEl.dataset.latitude), parseFloat(leafletMapEl.dataset.longitude)],
                zoom: parseInt(leafletMapEl.dataset.zoom),
                scrollWheelZoom: (leafletMapEl.dataset.scrollProtection == "true")
            }
        );

        L.tileLayer(
            'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            {
                attribution: 'Map data &copy; <a href="https://openstreetmap.org">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://mapbox.com">Mapbox</a>',
                maxZoom: 18
            }
        ).addTo(leafletMap);

        leafletMap.once('focus', function() { leafletMap.scrollWheelZoom.enable(); });

        if (leafletMapEl.dataset.markerLatitude != "" && leafletMapEl.dataset.markerLongitude != "") {
            let leafletMarker = L.marker([parseFloat(leafletMapEl.dataset.markerLatitude), parseFloat(leafletMapEl.dataset.markerLongitude)]).addTo(leafletMap);
            if(leafletMapEl.dataset.markerText != "") {
                leafletMarker.bindPopup(leafletMapEl.dataset.markerText);
            }
        }
    }
});
