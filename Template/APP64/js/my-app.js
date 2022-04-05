/*========================================== MASTER JAVASCRIPT ===================================================================

	Project     :	ACID - MOBILE TEMPLATE
	Version     :	1.0
	Last Change : 	12/07/2017
	Primary Use :   ACID - MOBILE TEMPLATE

=================================================================================================================================*/


(function () {

// Initialize your app
var myApp = new Framework7({
    animateNavBackIcon: true,
    // Enable templates auto precompilation
    precompileTemplates: true,
    // Enabled pages rendering using Template7
    template7Pages: true,
    // Specify Template7 data for pages
    swipeBackPage: true,
    pushState: true,
    pushStateSeparator: '#',
    onAjaxStart: function(xhr) {
        myApp.showIndicator();
    },
    onAjaxComplete: function(xhr) {
        myApp.hideIndicator();
    }
});

// Export selectors engine
var $$ = Dom7;

var mainView = myApp.addView('.view-main', {
    dynamicNavbar: false
});

$$(document).on('page:init', function(e) {

    document.addEventListener('touchmove', function(event) {
        if (event.target.parentNode.className.indexOf('navbarpages') != -1 || event.target.className.indexOf('navbarpages') != -1) {
            event.preventDefault();
        }
    }, false);

    // Add ScrollFix	
    var ScrollFix = function(elem) {
        // Variables to track inputs
        var startY, startTopScroll;
        elem = elem || document.querySelector(elem);

        // If there is no element, then do nothing	
        if (!elem)
            return;

        // Handle the start of interactions
        elem.addEventListener('touchstart', function(event) {
            startY = event.touches[0].pageY;
            startTopScroll = elem.scrollTop;

            if (startTopScroll <= 0)
                elem.scrollTop = 1;

            if (startTopScroll + elem.offsetHeight >= elem.scrollHeight)
                elem.scrollTop = elem.scrollHeight - elem.offsetHeight - 1;
        }, false);
    };

})

/*Gallery shuffle*/
myApp.onPageInit('gallery', function(page) {
 $(".swipebox").swipebox();
    var filtrContainer = $('.filtr-container');
    var simplefilter = $('.simplefilter li');
    if (simplefilter.length) {
        simplefilter.on('click', function() {
            simplefilter.removeClass('active');
            $(this).addClass('active');
        });
    }

    if (filtrContainer.length) {
       console.log(page);
		
       filtrContainer.css('visibility', 'hidden');
        setTimeout(function() {
            $(".filtr-container").filterizr();
            filtrContainer.css('visibility', 'visible');
        }, 2500);

    }
});

//FAQ ACCORDION
myApp.onPageInit('faq', function(page){
	var faq = $(".faq_acc");
		if(faq.length){
		  faq.each(function(){
			var all_panels = $(this).find('.faq-ans').hide();
			var all_titles = $(this).find('.faq-title');
			$(this).find('.faq-ans.active').slideDown();

			all_titles.on("click", function() {
			  var acc_title = $(this);
			  var acc_inner =  acc_title.next();

			  if(!acc_inner.hasClass('active')){
				 all_panels.removeClass('active').slideUp();
				 acc_inner.addClass('active').slideDown();
				 all_titles.removeClass('active');
				 acc_title.addClass('active');
			  } else {
				all_panels.removeClass('active').slideUp();
				all_titles.removeClass('active');
			  }
			});
		  });
		} 
});
			

//CONTACT FORM VALIDATION	
	myApp.onPageInit('contact', function(page) {	
		if ($('#contact-form').length) {
			$('#contact-form').each(function(){					
				
				$(this).validate({				
					errorClass: 'error',
					submitHandler: function(form){
						$.ajax({
							type: "POST",
							url:"mail/mail.php",
							data: $(form).serialize(),
							success: function(data) {							
							   if(data){
								   $('#sucessMessage').html('Mail Sent Successfully !');
								   $('#sucessMessage').show();
								   $('#sucessMessage').delay(3000).fadeOut();
							   }
							   else {
									$('#failMessage').html(data);
									$('#failMessage').show();
									$('#failMessage').delay(3000).fadeOut();
									}
							},
							error: function(XMLHttpRequest, textStatus, errorThrown) {
							   $('#failMessage').html(textStatus);
							   $('#failMessage').show();
							   $('#failMessage').delay(3000).fadeOut();
							 }
						});
					}				
				});
			});
		}
	});
})();