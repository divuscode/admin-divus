(function($){
	var initialiseContactValidation = function(){
		var form = $(".flip form");
		var name = $(".flip #name");
		var email = $(".flip #email");
		var message = $(".flip #message");

	    $('.flip form').submit(function(e){
	        var thisForm = $(this);
	        //Prevent the default form action
	        e.preventDefault();
	       
	        //Display the "loading" message
	        $(".flip #loading").fadeIn(function(){
	        //Post the form to the send script
	            $.ajax({
	                type: 'POST',
	                url: thisForm.attr("action"),
	                data: thisForm.serialize(),
	                //Wait for a successful response
	                success: function(data){
	                    //Hide the "loading" message
	                    $(".flip #loading").fadeOut(function(){
	                    //Display the "success" message
	                    $(".flip #success").text(data).fadeIn(function(){
	                        thisForm.find(".flip .input").val("");
	                        $(this).delay(1500).fadeOut();
	                    });
	                    });
	                },

	            });
	        });
	    })



		function validateName(){

			if(name.val().length < 3){
				name.css('border', '1px solid red').attr('placeholder', 'Enter your name');;
				return false;
			}
			else{
				name.css('border', '2px solid #99cc66').attr('placeholder', 'Your name');;
				return true;
			}
		}

		function validateEmail(){
			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			var demail= email.attr("value");
			if(!regex.test(demail)){
		  		email.css('border', '1px solid red').attr('placeholder', 'Enter your email');
		  		return false;
			}
			else{
				email.css('border', '2px solid #99cc66').attr('placeholder', 'Your email');
				return true;
			}
		}

		function validateMessage(){
			alert(1);
			if(message.val().length < 10){
				message.css('border', '1px solid red').attr('placeholder', 'Feel free to enter text here');;
				return false;
			}
			else{			
				message.css('border', '2px solid #99cc66').attr('placeholder', 'Your message');;
				return true;
			}
		}

		name.blur(validateName);
		message.blur(validateMessage);
		email.blur(validateEmail);

		name.keyup(validateName);
		email.keyup(validateEmail);
		message.keyup(validateMessage);

		$('.flip .contact #submit').click(function(){
			if(validateName() && validateEmail() &&validateMessage()){
				return true;
			}
			else{
				return false;
			}
		});
	}

	function initialiseMap() {
		var map;

		var marker;

		var LatLng = new google.maps.LatLng(59.32522, 18.07002);
		var markerPosition = new google.maps.LatLng(59.32512, 18.069992);
		var MY_MAPTYPE_ID = 'custom_style';

		var featureOpts = [
		{
			featureType: 'water',
			elementType: 'all',
			stylers: [
				{ hue: '#242b34' },
				{ saturation: -69 },
				{ lightness: -85 },
				{ visibility: 'on' }
			]
		},
		{
			featureType: 'landscape',
			elementType: 'all',
			stylers: [
				{ hue: '#ffffff' },
				{ saturation: -80 },
				{ lightness: -2 },
				{ visibility: 'on' }
			]
		},
		{
			featureType: 'poi',
			elementType: 'all',
			stylers: [
				{ hue: '#71db8e' },
				{ saturation: -25 },
				{ lightness: -13 },
				{ visibility: 'on' }
			]
		},
		{
			featureType: 'administrative.country',
			elementType: 'all',
			stylers: [
				{ hue: '#ffcb08' },
				{ saturation: 100 },
				{ lightness: -0 },
				{ visibility: 'on' }
			]
		},
		{
			featureType: 'road',
			elementType: 'all',
			stylers: [
				{ hue: '#00d6b6' },
				{ saturation: -50 },
				{ lightness: -6 },
				{ visibility: 'on' }
			]
		}
		];

		var mapOptions = {
			zoom: 16,
			center: LatLng,
			scrollwheel: false,     

			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
			},
			mapTypeId: MY_MAPTYPE_ID
		};

		map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);

		var styledMapOptions = {
			name: 'Custom Style'
		};
		
		marker =  new google.maps.Marker({
			draggable:true,
			position: markerPosition,
	    	animation: google.maps.Animation.DROP,
			map:map
			
		})
		
		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
	}
	var body = $("body, #wrapper, .flip");
 	var windowHeight = $(window).height();

 	var setHeightDocument = function(){
 		body.css({
 			minHeight: windowHeight
 		});
 	}
 	$("#map-canvas").css({
 		height: windowHeight
 	});

$("#contact-link").on("click", function(){
	    var id = $(this).attr("href").substring(1);
	    var content = $("#"+id).html();

	    $(".flip").flippy({
	    	
			color_target: "#fff",
	        verso: content,
	       	onStart: function(){
	         	$("body").scrollTop(0);
	         	 setHeightDocument();


			},
			onFinish: function(){
	         	initialiseContactValidation();
	         	initialiseMap();

			}

	    }) 
	})

})(jQuery);