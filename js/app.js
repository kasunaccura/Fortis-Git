
jQuery(document).ready(function ($) {


	$(".header__menu").click(function(){

        var $this = $(this);
     
        if ($this.hasClass('is_active')) {
            // alert('remove');
            $this.removeClass('is_active');
            $("#header_s_3_container").removeClass("is_active");   
            ;
            setTimeout(function(){ 
                $('.header__menu_d_icn').show();
            }, 
                1000);
        } else {
            // alert('active');
            $this.addClass('is_active');
            $("#header_s_3_container").addClass("is_active");
            $('.header__menu_d_icn').hide();
        }
    });

    
    jQuery('.grid').masonry({
        itemSelector: '.grid-item',
        horizontalOrder: true
    });
});

