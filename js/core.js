// import Masonry from "../node_modules/masonry-layout";
// var $ = jQuery.noConflict();

jQuery(document).ready(function($){
    var pagePer = 6; // Post per page
    var pageNumber = 1;


    // var $grid = $('.grid').masonry({
    //     itemSelector: '.grid-item',
    //     horizontalOrder: true
    // });

  

    $(".more_posts").on("click",function(){ 
    // function load_posts(){
        console.log("ghhghghg");
        pageNumber++;
        // var dcsPostType = jQuery(this).attr('dt');
        var CountPost = jQuery(this).attr('Pgcount');
        // var Wrapperst = jQuery(this).attr('Tvc');
        $.ajax({
            type: "POST",
            dataType: "html",
            url: ajax_posts.ajaxurl,
            data: {
				action	: "more_post_ajax", // add your action to the data object
				pagePer	: pagePer,
				pageNumber : pageNumber,
              
			},
            success: function(data){
                // console.log(data);
                // console.log("22222222222");
                // alert("hjhj");
                jQuery(".ajax-posts").append(data);

                // $grid.append(data).masonry('appended', data);
                jQuery('.ajax-posts').masonry('reloadItems');

                // jQuery('.ajax-posts').imagesLoaded(function () {
                //     jQuery('.ajax-posts').masonry()

                //         .masonry('appended', data)
                //         // layout
                //         .masonry();
                //     jQuery('.ajax-posts').masonry('reloadItems');
                //     jQuery('.ajax-posts').masonry('layout');
                // });
                // jQuery(".ajax-posts").append(data).masonry('appended', data, true);
                // jQuery('.ajax-posts').imagesLoaded(function () {
                //     jQuery('.ajax-posts').masonry()

                //         .masonry('appended', data)
                //         .masonry();
                //     jQuery('.ajax-posts').masonry('reloadItems');
                //     jQuery('.ajax-posts').masonry('layout');
                // });

                // jQuery(".ajax-posts").$grid.append(data).masonry('appended', data);
                if(jQuery('.ajax-posts .col-lg-4').length == CountPost-1){
                    jQuery(".more_posts").hide(); // This will hide the button once all posts have been loaded
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