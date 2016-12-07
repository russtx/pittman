(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
               $(document).ready(function()
                {
                  $('#pollSlider-button').click(function() {
                    if($(this).css("margin-right") == "200px")
                    {
                        $('.pollSlider').animate({"margin-right": '-=200'});
                        $('#pollSlider-button').animate({"margin-right": '-=200'});
                    }
                    else
                    {
                        $('.pollSlider').animate({"margin-right": '+=200'});
                        $('#pollSlider-button').animate({"margin-right": '+=200'});
                    }


                  });
                 });     
 
                //more
                $(".arrows").click(function() {
                    $('html,body').animate({
                        scrollTop: $(".second").offset().top},
                        'slow');
                });
                //more
                //
                //
		//end
	});
	
})(jQuery, this);
