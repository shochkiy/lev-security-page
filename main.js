var map;
                  function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 50.422861, lng: 30.639722},
                      zoom: 17
                    });
                      var marker = new google.maps.Marker({
                        position: {lat: 50.422861, lng: 30.639722},
                        map: map,
                        icon: {
                            url: "images/svg/geolocalizator.svg",
                            scaledSize: new google.maps.Size(42, 42)
	                    }
                });
}

$(document).ready(function() {

 $("#owl-example").owlCarousel({
     items: 1,
     margin: 20,
     loop: true,
     center: true,
     autoplay: true,
     autoplayTimeout: 4000,
     smartSpeed: 2000,
     responsive: {
        768: {
            items: 3
        }
     }
     
 });
$("#arrleft").on("click", function(){
    $("#owl-example").trigger("prev.owl.carousel");
})
$("#arrright").on("click", function(){
    $("#owl-example").trigger("next.owl.carousel");
})

});