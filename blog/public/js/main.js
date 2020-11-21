// Anonymous "self-invoking" function


var logoElement = 'images/avatar.jpg';

window.scroll(function() {
   if (window.scrollTop() + window.height() > document.height() - 100){
      logoElement.addClass('show');
   } else if (logoElement.hasClass('show') && window.scrollTop() + window.height() > document.height() -150){
      logoElement.removeClass('show');
   }
});

// $(window).scroll(function() {
  
//    if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
     
//        $(logoElement).addClass('show');
     
//    } else if($(logoElement).hasClass('show') && $(window).scrollTop() + $(window).height() > $(document).height() - 150) {
     
//       $(logoElement).removeClass('show');
     
//    }
// });