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
                //slider
                    $('#thumbs').delegate('img','click', function(){
                        $('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
                        $('#description').html($(this).attr('alt'));
                    });
                //slideout
                    
    
                    $("div.btn").hover(function () {
                        $("div.in").toggle("slide", { direction: "left" }, 200);
                    });
                    
                    //slideout
                    
    
                    $("div.btn-2").hover(function () {
                        $("div.in-2").toggle("slide", { direction: "right" }, 200);
                    });

                   
		//end
	});
	
})(jQuery, this);
