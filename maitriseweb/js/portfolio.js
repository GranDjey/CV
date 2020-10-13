 /*
 
 // portfolio
 $('.gallery ul li a').click(function() {
     var itemID = $(this).attr('href');
     $('.gallery ul').addClass('item_open');
     $(itemID).addClass('item_open');
     return false;
 });
 $('.close').click(function() {
     $('.port, .gallery ul').removeClass('item_open');
     return false;
 });

 $(".gallery ul li a").click(function() {
     $('html, body').animate({
         scrollTop: parseInt($("#top").offset().top)
     }, 400);
 });
*/




 // portfolio
 $('.gallery .site a').click(function () {
     var itemID = $(this).attr('href');
     $('.gallery').addClass('item_open');
     $(itemID).addClass('item_open');
     return false;
 });
 $('.close').click(function () {
     $('.port, .gallery').removeClass('item_open');
     return false;
 });

 $('.gallery .site a').click(function () {
     $('html, body').animate({
         scrollTop: parseInt($("#top").offset().top)
     }, 400);
 });