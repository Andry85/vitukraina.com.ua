(function($){


     /*********************************************************/
    /* start slider   */
    /********************************************************/
        $('.mainSlider .owl-carousel').owlCarousel({
            items:1,
            margin: 0,
            autoHeight:true,
            nav: false,
            dots: true
        });
    /*********************************************************/
    /* end slider  */
    /********************************************************/

    /*********************************************************/
    /* partners slider   */
    /********************************************************/
        $('.partnersSlider .owl-carousel').owlCarousel({
            autoHeight:true,
            nav: false,
            dots: true,
            responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
            		margin: 0
		        },
		        768:{
		            items: 3,
            		margin: 30,
		        }
		    }
        });
    /*********************************************************/
    /* end slider  */
    /********************************************************/


    /*********************************************************/
    /* mobile nav   */
    /********************************************************/
	    $('.menu').slicknav({
			label: ''
		});
    /*********************************************************/
    /* end mobile nav  */
    /********************************************************/

    mobileView();
    function mobileView() {
        
        var wiw = window.innerWidth;
        if(wiw < 992) {

        	$(".languages li").each(function(){
		        $(this).addClass('menu__item');
		        $(this).find('a').attr("role","menuitem");
		        $(this).find('a').attr("tabindex","0");
		    });

        	$('.languages').find('li').appendTo('.slicknav_nav');
        }

        if(wiw < 768) {

        	 /*********************************************************/
		    /* about slider   */
		    /********************************************************/
		        
			        $('.gallerySlider .owl-carousel').owlCarousel({
			            autoHeight:true,
			            nav: false,
			            dots: true,
			            responsiveClass:true,
			            items:1,
			            margin: 0
			        });

		    /*********************************************************/
		    /* end about slider  */
		    /********************************************************/
        }
    };


    /*********************************************************/
    /* about slider   */
    /********************************************************/
        $('.aboutGallerySlider .owl-carousel').owlCarousel({
            autoHeight:true,
            nav: false,
            dots: true,
            responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
            		margin: 0
		        },
		        768:{
		            items: 4,
            		margin: 30,
		        }
		    }
        });
    /*********************************************************/
    /* end about slider  */
    /********************************************************/

   




    
    




})(jQuery);