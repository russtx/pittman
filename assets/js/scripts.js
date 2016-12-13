(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
               


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
                    //test
                    
                       var red = $('.red'),
                        blue = $('.blue');

                    red.click(function() {
                        red.stop().animate({
                            left: '-' + 0 - red.width() + 'px'
                        }, 400);
                        blue.stop().animate({
                            left: '0%'
                        }, 400);
                    });

                    blue.click(function() {
                        blue.stop().animate({
                            left: '70%'
                        }, 400);
                        red.stop().animate({
                            left: '0%'
                        }, 400);
                    });
                    

                   
		//end
	});
	
})(jQuery, this);
