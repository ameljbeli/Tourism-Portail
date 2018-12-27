(function($) {
    "use strict";
    var Spa = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {

            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }

            /*-------------- projectname Functions Calling ---------------------------------------------------
            ------------------------------------------------------------------------------------------------*/
            this.Slider();
            this.Map_function();
            this.responsive_menu();
        },

        /*-------------- projectname Functions definition ---------------------------------------------------
        ---------------------------------------------------------------------------------------------------*/
		Slider: function(){
			$('#banner_slider').owlCarousel({
				loop:true,
				items:1,
				singleItem:true,
				responsiveClass:true,
				autoplay:true,
				autoplayTimeout:2000,
				autoplaySpeed:2000,
				speed:2000,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		},
		Map_function: function () {
			if($(".ed_map").length){
			   $( ".ed_map" ).each(function( index ) {
					 var id = $(this).attr("id");
					 var address = $(this).attr("data-address");
					 $(this).googleMap({
					  scrollwheel:true
					 });
					 $(this).addMarker({
					   //coords: [22.9622672, 76.05079490000003] // for using lat long for marker
					   address:address
					 });
				}); 
			}
		},
		responsive_menu:function(){
			 $(".ts_menu_wrapper>ul>li").find('.sub-menu').parent().addClass('dropdown');
			 $(".ts_menu_wrapper>ul>li.dropdown").append('<div class="show-submenu"><i class="fa fa-angle-down"></i></div>');

			$(".ts_menu_wrapper>ul>li.dropdown").on("click", ".show-submenu", function(e) {
				e.stopPropagation();
				
				$(this).html($(this).html() == '<i class="fa fa-angle-down"></i>' ? '<i class="fa fa-angle-up"></i>' : '<i class="fa fa-angle-down"></i>');
			});
			
			$('.ts_menu_wrapper>ul>li.dropdown .show-submenu').click(function() {
				$('.ts_menu_wrapper>ul>li.dropdown .show-submenu').not($(this)).
				parent().find('.sub-menu').hide();
				$(this).parent().find('.sub-menu').toggle();
			});
		},
	};
	// ready function
	$(document).ready(function() {
		Spa.init();
	});
	
})(jQuery);