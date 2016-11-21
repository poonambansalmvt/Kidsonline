jQuery(document).ready(function(){

	jQuery('ul.nav li.dropdown').hover(function() {
		jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	jQuery('.accordion-heading').click(function(){
		jQuery('.accordion-toggle').removeClass('active');
		jQuery('.accordion-body').removeClass('in');
		jQuery(this).children().addClass('active');
	});
	jQuery('.flexslider').flexslider({
		animation: "slide",
		animationLoop: true,
		itemWidth: 1053

	});

	jQuery('#registration-form').validate({
	    rules: {
	      
		  
	      email: {
	        required: true,
	        email: true
	      },
		  
		  agree: "required"
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });

	jQuery('#commentform').validate({
	    rules: {
	       author: {
	        required: true,
	       required: true
	      },
	      email: {
	        required: true,
	        email: true
	      },
		  
	     
		   url: {
	      	minlength: 10,
	        required: true
	      },
		  agree: "required"
		  
	    },
			highlight: function(element) {
				$(element).closest('.control-group').removeClass('success').addClass('error');
			},
			success: function(element) {
				element
				.text('OK!').addClass('valid')
				.closest('.control-group').removeClass('error').addClass('success');
			}
	  });


});
