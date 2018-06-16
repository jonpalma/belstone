var map;
function initMap() {
    $('.googleMap').each(function() {
        var lat = $(this).data('lat'),
            long = $(this).data('long'),
            title = $(this).data('title').toString(),
            id = $(this).attr('id');

        var map_canvas = this;

        mapConfig(map_canvas,lat,long,title);
    });
}

$('.map-btn').click(function () {
    var btn = $(this),
        mini_map = btn.find('.googleMap'),
        lat  = mini_map.data('lat'),
        long = mini_map.data('long'),
        title = mini_map.data('title'),
        modal = $('#map-modal'),
        map = modal.find('.modal-google-map')[0];

    mapConfig(map,lat,long,title);

    modal.modal('show');
});

function mapConfig(map_canvas,lat,long,title) {
    var map_options = {
        center: new google.maps.LatLng(lat, long),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        streetViewControl: false,
        //draggable: !("ontouchend" in document)
    };

    map = new google.maps.Map(map_canvas, map_options);

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(lat, long),
        map: map,
        title: title,
        url: 'http://maps.google.com/maps?q=loc:' + String(lat) + ',' + String(long)
    });

    google.maps.event.addListener(marker, 'click', function() {
        /*window.location.href = this.url;*/
        window.open(this.url,'_blank');
    });
}