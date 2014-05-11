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
		  

		$(".sidebar-link, .sidebar-brand a").on("click", function( event ){
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