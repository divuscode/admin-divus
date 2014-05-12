(function(){

	var sideBar = function(){
	 	$(window).resize(function(){
		    if ($(this).width() <= 768) {
		    $("#wrapper").addClass("active");
		    $(".content-header").addClass("with-color");

		    }
		    else {
		        $("#wrapper").removeClass("active");
		    	$(".content-header").removeClass("with-color");


		    }     
		})
		if($(window).width() <= 768 ){
		    $("#wrapper").addClass("active");
		    $(".content-header").addClass("with-color");

		}
		else {
		    $("#wrapper").removeClass("active");
		    $(".content-header").removeClass("with-color");


		}
		$(".toggle-sidebar-left").click(function(e) {
		    e.preventDefault();
		    $("#wrapper").addClass("active");
		    $(".content-header").addClass("with-color");

		});
		$(".toggle-sidebar-right").click(function(e) {
		    e.preventDefault();
		    $("#wrapper").removeClass("active");
		    $(".content-header").removeClass("with-color");

		});
		  

		$(".sidebar-dropdown, .sidebar-brand a").on("click", function( event ){
			event.preventDefault();
			// $(".sidebar-link, .sidebar-brand a").removeClass("active");
			$(this).toggleClass("active");
		})
		
	}
	sideBar();
})(jQuery);

$(window).load(function() {
	$("#loader").fadeOut();
	$(".mask").delay(500).fadeOut("slow");

});

(function($){

	$('[data-toggle="tooltip"]').tooltip('hide');

	var originalcolor;
	$( "#sortable" ).sortable({
	    start: function(event, ui){
	        originalcolor = $(ui.item).css('background-color'); //store the color
	        $(ui.item).animate({
	            'background-color': '#333333'
	        }, 'fast');
	    },
	    stop: function(event, ui){
	        $(ui.item).animate({
	            'background-color': '#333333'
	        }, 'fast');

	        $(".confirm-icon").on("click", function(){
	        	$(ui.item).animate({
	            	'background-color': originalcolor
	        	}, 'fast');
	        })
	    }
	});

	

})(jQuery);