var counter = 0;

$( document ).ready(function() {
  console.log('yawn');
  $('p').flowtype({
     minFont : 16,
     maxFont : 40,
  });
  $('.hitHeart').click(function(e) {
    counter += 1;
    console.log(counter);
    e.preventDefault;
  });



});
