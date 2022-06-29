jQuery(function($) {


	function equalise_product_box_exerpt(){

		var maxHeight = 0;
		
		$(".term-product section").each(function(){
			if ($(this).height() > maxHeight) { 
		   		maxHeight = $(this).height(); 
		   	}
		});

		$(".term-product section").height(maxHeight);
	}

	function equalise_products_related_exerpt(){

		var maxHeight = 0;
		
		$(".product-excerpt").each(function(){
			if ($(this).height() > maxHeight) { 
		   		maxHeight = $(this).height(); 
		   	}
		});

		$(".product-excerpt").height(maxHeight);
	}



	equalise_product_box_exerpt();
	equalise_products_related_exerpt();

	function control_sticky(controller){

		if($(controller).visible(true)){
			
			//HEADER IS VISIBLE
			if($('body').hasClass('sticky')){

				$('.logo-shield').show();

				$('body').removeClass('sticky');
				
				$('.sticky-phone').hide();
				$('.sticky-shield').hide();

			}

		} else {

			//HEADER NOT VISIBLE
			if(!$('body').hasClass('sticky')){
				
				$('.logo-shield').hide();

				$('body').addClass('sticky');

				$('.sticky-phone').show();
				$('.sticky-shield').show();


			}
		}
			
	}

	$(window).scroll(function(){

		control_sticky("#usp-strip");

	});


	if($('#page-banner-carousel').length){
        $('#page-banner-carousel').owlCarousel({
            loop:true,
            margin:10,
            center: true,
            nav:false,
            dots: true,
            items: 1
        });
    }

    if($('#worked-with-carousel').length){

    	setTimeout(function(){

			$('#worked-with-carousel').owlCarousel({
	            loop:true,
	            margin:30,
	            nav:false,
	            dots: false,
	            autoWidth:true,
	            autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:false,
				mouseDrag: false,
	  			touchDrag: false,
	  			center: true
	        });
	        
    	},200);

	        
    }


    if($('#installers-carousel').length){

    	setTimeout(function(){

			$('#installers-carousel').owlCarousel({
	            loop:false,
	            margin:30,
	            nav:false,
	            dots: false,
	            autoWidth: true,
				mouseDrag: false,
	  			touchDrag: false,
	  			items: 5,
	  			//center: true,

	  			responsive: {
	  				0: {
	  					dots: true
	  				},
	  				1200: {
	  					dots: false
	  				}
	  			}
	        });
	        
    	},100);  
    }


    if($('#product_images_carousel').length){

    	$('#product_images_carousel').owlCarousel({
	        loop:true,
	        margin:0,
	        nav:false,
	        dots: true,
	        autoWidth: false,
			mouseDrag: true,
			touchDrag: true,
			items: 1
		});

   	}

    $(".burger-menu").click(function(){

    	$(this).toggleClass('open');
    	$('.mobile-menu').slideToggle('slow');

    });


    function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}


    $("#get_in_touch_form").submit(function(){
    	
		$("#form-response-message").hide();
		$("#get_in_touch_form .form-group").removeClass('has-error');

    	var first_name = $("#first_name").val().trim();
    	var last_name = $("#last_name").val().trim();
    	var company = $("#company").val().trim();
    	var email = $("#email").val().trim();
    	var phone = $("#phone").val().trim();
    	var message = $("#message").val().trim();

    	if(!first_name){
    		$("#first_name").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please fill in your first name').show();
			return false;
    	}

    	if(!last_name){
    		$("#last_name").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please fill in your last name').show();
			return false;
    	}

    	if(!email){
    		$("#email").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please fill in your email address').show();
			return false;
    	}

    	if(!isEmail(email)){
    		$("#email").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please enter a valid email address').show();
			return false;
    	}

    	if(!phone){
    		$("#phone").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please fill in your phone number').show();
			return false;
    	}

    	if(!message){
    		$("#message").parent().addClass('has-error');
    		$("#form-response-message").addClass('error').removeClass('success').text('Please type out your message').show();
			return false;
    	}

    	



    });

$('.search-icon').click(function(){
  $('body').toggleClass('open-search');
  return false;
});
$('.search-box').click(function(event){
    event.stopPropagation();
});

});