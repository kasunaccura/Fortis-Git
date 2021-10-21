

jQuery(document).ready(function($){
    var pagePert = 4; // Post per page
    var pageNumbert = 1;

console.log("hggfhfgfgh");


  

    $(".more_posts_proj").on("click",function(){
    // function load_posts(){
        pageNumbert++;
        // var dcsPostType = jQuery(this).attr('dt');
        var CountPost = jQuery(this).attr('Pgcount');
        console.log("55555");
        // var Wrapperst = jQuery(this).attr('Tvc');
        $.ajax({
            // console.log("55555"),
            type: "POST",
            dataType: "html",
            url: ajax_poststwo.ajaxurltwo,
            data: {
                action: "more_post_ajax_proj", // add your action to the data object
				pagePert	: pagePert,
				pageNumbert : pageNumbert,
              
			},
            success: function(data){
                console.log(data);
                // console.log("22222222222");
                // alert("hjhj");
                jQuery(".ajax-posts-proj").append(data);

             

        
                if (jQuery('.ajax-posts-proj .row').length == CountPost-1){
                    jQuery(".more_posts_proj").hide(); // This will hide the button once all posts have been loaded
                }
            },
            error : function(jqXHR, textStatus, errorThrown) {
                $loader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
        return false;
    // }
    // When btn is pressed.
        // load_posts();
    });




    // $('.grid').masonry({
    //     itemSelector: '.grid-item',
    //     columnWidth: 200
    // });




});