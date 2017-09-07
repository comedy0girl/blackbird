
$(document).ready(function(){

   $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });

  


	  $('.slick-slider').slick({
			slidesToShow: 3,
		    slidesToScroll: 3,
		    dots: false,
	    	arrows: false,
		    infinite: true,
		    autoplay: true,
		    cssEase: 'linear',responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
	  });



$('.grid').isotope({
  itemSelector: '.grid-item',
   layoutMode: 'fitRows',
    layoutMode: 'masonry',
  masonry: {
    columnWidth: 110
  },
  cellsByRow: {
    columnWidth: 220,
    rowHeight: 220
  },
  masonryHorizontal: {
    rowHeight: 110
  },
  cellsByColumn: {
    columnWidth: 220,
    rowHeight: 220
  }

});



});



$(window).scroll(function() {    
     var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll >= 200) {
    //console.log('a');
    $(".hero-navigation").addClass("navBG");
} else {
    //console.log('a');
    $(".hero-navigation").removeClass("navBG");
}
  });