var $ = jQuery.noConflict();

$(document).ready(function() {
    new WOW().init({ });
	
	$('#sync1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 7000,
            asNavFor: '#sync2',
            infinite: true,
            pauseOnHover : true,
            prevArrow: $('.left-arrow'),
            nextArrow: $('.right-arrow')
        });
        
	$('#sync2').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '#sync1',
            speed: 1000,
            arrows: false,
            fade: true,
            pauseOnHover: true
        });        
    
 });
