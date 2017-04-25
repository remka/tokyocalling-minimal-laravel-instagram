var counter = 0;

$( document ).ready(function() {

  console.log('yawn');

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

});
