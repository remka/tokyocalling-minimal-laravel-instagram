var counter = 0;

// jQuery to collapse the navbar on scroll
var collapseNavbar = function () {
  if ($(".navbar").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
  } else {
      $(".navbar-fixed-top").removeClass("top-nav-collapse");
  }
}


$( document ).ready(function() {

  console.log('yawn');

  $(window).scroll(collapseNavbar);
  $(document).ready(collapseNavbar);

  $('p').flowtype({
     minFont : 16,
     maxFont : 40,
  });

  $('.openImage').click(function(e) {
    console.log('do stuff!');
    e.preventDefault;
  });

  $('.hitHeart').click(function(e) {
    counter += 1;
    console.log(counter);
    e.preventDefault;
  });

  // jQuery for page scrolling feature - requires jQuery Easing plugin
  $(function() {
      $('a.page-scroll').bind('click', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutExpo');
          event.preventDefault();
      });
  });

  // Closes the Responsive Menu on Menu Item Click
  $('.navbar-collapse ul li a').click(function() {
      $(".navbar-collapse").collapse('hide');
  });

});
