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

	var secondaryLinksSortable;
	var secondaryMenuConfirmButton;

	var primaryMenuConfirmButton;
	var priamryLinksSortable;

	var primaryMenu = function(){
		priamryLinksSortable.sortable({
		    start: function(event, ui){
		        originalcolor = $(ui.item).children("a").css('background-color'); //store the color
		        $(ui.item).children("a").animate({
		            'background-color': '#333333'
		        }, 'fast');
		    },
		    stop: function(event, ui){
		        $(ui.item).children("a").animate({
		            'background-color': '#333333'
		        }, 'fast');

		        primaryMenuConfirmButton.on("click", function(){
		        	$(ui.item).children("a").animate({
		            	'background-color': originalcolor
		        	}, 'fast');
		        })
		    }
		});
	}

	var secondaryMenu = function(){
		secondaryLinksSortable.sortable({
		    start: function(event, ui){
		        originalcolor = $(ui.item).children("a").css('background-color'); //store the color
		        $(ui.item).children("a").animate({
		            'background-color': '#333333'
		        }, 'fast');
		    },
		    stop: function(event, ui){
		        $(ui.item).children("a").animate({
		            'background-color': '#333333'
		        }, 'fast');

		        secondaryMenuConfirmButton.on("click", function(){
		        	$(ui.item).children("a").animate({
		            	'background-color': originalcolor
		        	}, 'fast');
		        })
		    }
		});
	}

	var initialize = function(){
		$(document).on("ready", function(){

			priamryLinksSortable = $( '.primary-menu [data-sortable="sortable"]' );
			secondaryLinksSortable = $( '.secondary-menu [data-sortable="sortable"]' );

			primaryMenuConfirmButton = $(".primary-menu .confirm-icon");
			secondaryMenuConfirmButton = $(".secondary-menu .confirm-icon");

			primaryMenu();
			secondaryMenu();
		})
	}
	initialize();

})(jQuery);

(function($){

	var selectPage = [];
	var uncheckedPage;
	var checkedPage;

	var selectedPages;
	var appendPageToMenu = function(){
		$(".add-page-to-primary-menu").on("click", function(event){
			event.preventDefault();
			$(".primary-menu #sortable").append(selectedPages);
		})
	}

	var initialize = function(){
		$(document).on("ready", function(){
			$('.input-group input').change(function(){

				if ( this.checked ){
					checkedPage = "<li class=\"pages-sortable\"><a href=''>"+$(this).data("title")+"</a><span class=\"pages-edit-icon\"><a href=\"add-page.php\" class=\"add-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add new page\"><i class=\"fa fa-plus\"></i></a> <a href=\"edit-page.php\" class=\"edit-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit page\"><i class=\"fa fa-edit\"></i></a> <a href=\"#\" class=\"delete-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete page\"><i class=\"fa fa-eraser\"></i></a></span></li>";

			    	selectPage.push(checkedPage);
				}

				else {
					uncheckedPage = "<li class=\"pages-sortable\"><a href=''>"+$(this).data("title")+"</a><span class=\"pages-edit-icon\"><a href=\"add-page.php\" class=\"add-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Add new page\"><i class=\"fa fa-plus\"></i></a> <a href=\"edit-page.php\" class=\"edit-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit page\"><i class=\"fa fa-edit\"></i></a> <a href=\"#\" class=\"delete-icon\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete page\"><i class=\"fa fa-eraser\"></i></a></span></li>";
				}
				
				selectPage = jQuery.grep(selectPage, function(value) {
			        return value != uncheckedPage;
			      });
 
			    selectedPages = selectPage;
			});

			appendPageToMenu();
		})
	}

	initialize();


})(jQuery);

(function($){
	var container = document.querySelector('#container');
	var msnry = new Masonry( container, {
  	// options
  		columnWidth: 200,
  		itemSelector: '.item'
	});
})(jQuery);