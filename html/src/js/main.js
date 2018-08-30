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



    




})(jQuery);