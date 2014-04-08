(function($) {

    $.fn.viewBoxLite = function(options) {
    var opts = $.extend({}, $.fn.viewBoxLite.defaults, options);
     
      $('.myLightBox img').mouseover(function() {
         $(this).toggleClass("onfocusBIG");
         
            var src = this.src;
          $(this).css('z-index','99999');
          $('#overlay').fadeIn(300);
        
      }); 
     
     
       
    $('.thumb').each(function(i) {                     //FadeIn thumbs at start.
    $(this).delay(opts.fadeInSpeedThumbs*i).fadeIn();  //console.log(opts.fadeInSpeedThumbs);
    
     });
    
 
    $('.thumb img').mouseover(function() {
        
   
    var src = this.src;
    //console.log(src);
     $(this).toggleClass("onfocus");
 
    $('.myLightBox img').fadeOut(opts.fadeOutSpeed,function(){
    $('.myLightBox img').attr("src",src).load(function() {;
    $('.myLightBox img').fadeIn(opts.fadeInSpeed);
   
     });
     });
   }); 
   

   $('.thumb img').mouseout(function() {
   
     $(this).removeClass("onfocus");
     
   }); 
   
    $('.myLightBox img').mouseout(function() {
      $(this).removeClass("onfocusBIG","slow");
       $('#overlay').fadeOut(500, function(){
       
    });
   
   }); 
 

   
   
 
 
 }
  
   // default options
  $.fn.viewBoxLite.defaults = {
  fadeInSpeedThumbs:200, // <-- Defalut opts
  fadeInSpeed:200,  // <-- Defalut opts
  fadeOutSpeed:200, // <-- Defalut opts
};

}(jQuery));
 

 