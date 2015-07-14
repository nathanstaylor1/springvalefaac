// google map initialize


function initialize() {
  var mapCanvas = document.getElementById('map-canvas');

  if (mapCanvas){
    var location = mapCanvas.className

    switch (location){
      case "Springvale":
         var myLatlng = new google.maps.LatLng(-37.949831, 145.150429);
      break;
      case "Lynbrook":
         var myLatlng = new google.maps.LatLng(-38.051769, 145.257404);
      break;
    }
    var mapOptions = {
      center: myLatlng,
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: location
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);



$(document).ready(function(){

  setTimeout(function(){$(".item.active > .carousel-caption").fadeIn(500)},500)

  $("#frontSlider").on('slide.bs.carousel', function () {
          $(".item.active > .carousel-caption").fadeOut(300)
  });
	
  $("#frontSlider").on('slid.bs.carousel', function () {
          $(".item.active > .carousel-caption").fadeIn(500)
  });

  $("#slider-buttons > span:first-child").click(function(){
    $("#frontSlider").carousel("prev");
  });
  $("#slider-buttons span:last-child").click(function(){
    $("#frontSlider").carousel("next");
  });

  $("#scrollToTop").click(function(){
      $("html, body").animate({ scrollTop: 0 }, 500);
  })


	addLipsum()

});


//-------- HELPER FUNCTIONS -------//
function spread(low,high){
  return (low + Math.floor(Math.random()*(high-low)))
}

function lipsum(num){
  var words = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a".split(" ")
  var output = ""
  for (var i = 0; i < num; i++){
    output += words[spread(0,100)] + " "
  }
  output = output[0].toUpperCase() + output.substring(1,output.length)
  return output
}

function addLipsum(){
  $('body *').each(function(){                                                                                                                                                                                                                                                         
      if ($(this).hasClass("LE")){
      var classList = $(this).attr('class').split(" ");
        for (i = 0; i < classList.length; i++){
          if (!isNaN(classList[i])){
            $(this).html($(this).html() + lipsum(classList[i]));
          }
        } 
      }                                                                                                                                     
  });
}

function fillEach(selector,htmlFunction){
  $(selector).each(function(i, obj) {
    $(this).html(htmlFunction)
  });
}