//Nav bar transparency
 var nav = document.getElementById('nav');
 navlink_class = document.getElementsByClassName("nav-link");
 
      window.onscroll = function(){
        if (window.pageYOffset >100) {
          nav.style.background = "#fff";
          nav.style.boxShadow = "0 4px 6px -5px #999"; 
          
         for (var i = 0; i < navlink_class.length; i++) {
            navlink_class[i].style.color="#676363";
         }
           $("#nav_img").attr("src","/assets/img/mertics-logo-nav.png");
        }else{
          nav.style.background = "transparent";
          nav.style.boxShadow = "";
           for (var i = 0; i < navlink_class.length; i++) {
             navlink_class[i].style.color="white";
         }
         $("#nav_img").attr("src","/assets/img/mertics-logo-nav-2.png");
        }
      }


function googleMap() {
  var myCenter = new google.maps.LatLng(6.917244, 79.879715);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 12};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);
}

function contactValidation() {
    var name =  document.getElementById('name').value;
    if (name == "") {
        document.getElementById('status').innerHTML = "Name cannot be empty";
        return false;
    }
    var email =  document.getElementById('email').value;
    if (email == "") {
        document.getElementById('status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(email)){
            document.getElementById('status').innerHTML = "Email format invalid";
            return false;
        }
    }
    var subject =  document.getElementById('subject').value;
    if (subject == "") {
        document.getElementById('status').innerHTML = "Subject cannot be empty";
        return false;
    }
    var message =  document.getElementById('message').value;
    if (message == "") {
        document.getElementById('status').innerHTML = "Message cannot be empty";
        return false;
    }
    document.getElementById('status').innerHTML = "Sending...";
    document.getElementById('contact-form').submit();

}

// JavaScript for label effects only
	$(window).load(function(){
		$(".col-3 input").val("");
		
		$(".input-effect input").focusout(function(){
			if($(this).val() != ""){
				$(this).addClass("has-content");
			}else{
				$(this).removeClass("has-content");
			}
		})
	});


//Scroll to Top
$(window).scroll(function() {
    if ($(this).scrollTop() > 50 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"3000");return false})})


