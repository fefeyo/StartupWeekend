// $(function(){
//     var canvas = $('#map_canvas');
//     var latlng = new google.maps.LatLng(32.806186, 130.705834);
//     var mapOption = {
//         zoom: 15,
//         center: latlng
//     };
//     var map = new google.maps.Map(canvas, mapOption);
// });

var map;
function initMap() {
    map = new google.maps.Map(
        document.getElementById('map_canvas'),
        {
            center: {lat: 32.806186, lng: 130.705834},
            zoom: 8
        }
    );
    // var marker = new google.maps.Marker({
    //     position: {lat: 32.806186, lng: 130.705834},
    //     map: map,
    //     title: "熊本城",
    //     animation: google.maps.Animation.DROP
    // });
    // var infowindow = new google.maps.InfoWindow({
    //     content: "熊本城だよ"
    // });
    // marker.addListener('click', function(){
    //     infowindow.open(map, marker);
    // });
}

var marker;
$(function() {
    $('.timeline-item').on('click', function(){
        $('#info-necessities').empty();
        $('#map_info').slideDown();
        $('#info-title').text($(this).attr('title'));
        $('#info-image').attr('src', 'data:image/jpg;base64,'+$(this).attr('image'));
        console.log($(this).attr('image'));
        var necessities = $(this).attr('necessities');
        var json_nes = $.parseJSON(necessities);
        json_nes.forEach(function(json){
            $('#info-necessities').append('<li>'+ json.name + ':' + json.amount +'</li>');
        });
        $('#info-image').attr('src', $(this).attr('image'));
        if(null != marker) {
            marker.setMap(null);
            marker = null;
        }
        var latlng = new google.maps.LatLng($(this).attr('lat'), $(this).attr('lng'));
        marker =new google.maps.Marker({
            position: latlng,
            title: $(this).attr('title'),
            map: map,
            animation: google.maps.Animation.DROP
        });
        var info = new google.maps.InfoWindow({
            content: $(this).attr('title')
        });
        info.open(map, marker);
        map.setCenter(latlng);
        map.setZoom(12);
    });
});
