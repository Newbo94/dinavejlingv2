
/*  Menu der bliver togglet med button nav-btn */

$(document).ready(function () {
  $('#toggle-button').on('click', function() {
    $('div.toggle-nav ').animate({
      'width': 'toggle'
    }, );
  });


});
