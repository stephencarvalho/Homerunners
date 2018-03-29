    $(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.nav_change');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.nav_change').css('background-color', 'rgba(34,34,34,1)');
       } else {
          $('.nav_change').css('background-color', 'rgba(34,34,34,0.5)');
       }
   });
});