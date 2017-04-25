var counter = 0;

var sortDefault = 'date',
    sortOrder   = 'desc';

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
    e.preventDefault();
  });

  $('.hitHeart').click(function(e) {
    counter += 1;
    console.log(counter);
    e.preventDefault();
  });

  $('.sort-list').click(function(e) {

    var sortType = $(this).attr('data-type');

    var $items = $('ul.instagram-list'),
	      $itemsLi = $items.children('li');

    console.log('Sorting by ' + sortType + '...');

    /*
    switch(sortType) {
      case 'date':
        var an = a.getAttribute('data-created'),
            bn = b.getAttribute('data-created');
      break;
      case 'likes':
        var an = a.getAttribute('data-likes'),
            bn = b.getAttribute('data-likes');
      break;
      case 'comments':
        var an = a.getAttribute('data-comments'),
            bn = b.getAttribute('data-comments');
      break;
    };
    */

    $itemsLi.sort(function(a,b){
      switch(sortType) {
        case 'date':
          var an = parseInt(a.getAttribute('data-created')),
              bn = parseInt(b.getAttribute('data-created'));
        break;
        case 'likes':
          var an = parseInt(a.getAttribute('data-likes')),
              bn = parseInt(b.getAttribute('data-likes'));
        break;
        case 'comments':
          var an = parseInt(a.getAttribute('data-comments')),
              bn = parseInt(b.getAttribute('data-comments'));
        break;
      };
      if(an > bn) {
    		return -1;
    	}
    	if(an < bn) {
    		return 1;
    	}
    	return 0;
    });

    $itemsLi.detach().appendTo($items);

    $('.sort-list').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
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
