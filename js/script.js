$(document).ready(function(){

    // ********** REMOVE MAIN PAGE PRELOADER **********//
    function remove_main_page_preloader(){
        $("#main_app_preloader").fadeOut(300)
    }
    setTimeout(function(){
        remove_main_page_preloader()
    }, 1000)
    
    
    
    
    
    
    
    // ********** SLIDER ***********//
    var n = 1;
    var page_slider_container = $(".slider-container");
    
    function page_slider(){
        sliders = $(page_slider_container).children() 
        var total_slide = sliders.length; 
        var duration = $(page_slider_container).attr('data-duration')
    
        for(var i = 0; i < sliders.length; i++){
            $(sliders[i]).css({
                opacity: '0'
            })
        }
    
        if(n > total_slide){
            n = 1;
        }
     
        $(sliders[n - 1]).css({
            opacity: '1'
        })
        n++;
    
        setTimeout(function(){
            page_slider()
        }, duration)
    }
    
    page_slider()
    
    
    
    
    
    
    
    
    // ********** BOOTSTARP SELECT *********//
    $('select').selectpicker();
    
    
    
    
    
    // ********** OPEN SIDE NAVIGATION ************//
    function open_mobile_navigation(){
        $(".side-navigation-open-button").click(function(e){
            e.preventDefault()
    
            $("#side_dark_theme").show()
            $("#side_nav_content").css({
                left: '0px',
            })
        })
    }
    open_mobile_navigation()
    
    
    
    
    
    
    
    // ********** CLOSE SIDE NAVIGATION ************//
    function close_mobile_navigation(){
        $("#side_nav_close").click(function(e){
            e.preventDefault()
    
            $("#side_dark_theme").hide()
            $("#side_nav_content").css({
                left: '-500px',
            })
        })
    }
    close_mobile_navigation()
    
    
    
    
    
    
    
    // ********** CLICK DARK SKIN TO CLOSE SIDE NAVIGATION ************//
    function darkskin_close_mobile_navigation(){
        $("#side_dark_theme").click(function(){
            $("#side_nav_close").click()
        })
    }
    darkskin_close_mobile_navigation()
    
    
    
    
    
    // ********* SCROLL TO TOP EFFECT ************//
    function scroll_to_top(){
        var scrollTop = $(".angle-up-container");
        
        var elementTop = $(window).scrollTop();
        var footerContainer = $(scrollTop).offset().top;
        var inview = $(window).height();
        var difference = ((footerContainer - elementTop));
    
        if(difference < inview){
            $(scrollTop).children().fadeIn();
        }else{
            $(scrollTop).children().fadeOut();
        }
    
        // angle up onscroll effect
        // ============================
        $(window).scroll(function(){
            var elementTop = $(this).scrollTop();
            var difference = ((footerContainer - elementTop));
            if(difference < inview){
                $(scrollTop).children().fadeIn();
            }else{
                $(scrollTop).children().fadeOut();
            }
        });
    }
    if($(".angle-up-container").length){
        scroll_to_top()
    }
    
    
    
    
    
    
    
    // ********* SMOOTH SCROLL UP *************//
    $("#smooth_scroll_btn").click(function(e){
        e.preventDefault()
        $("html, body").animate({
            scrollTop: '0'
        }, 700);
    })
    
    
    
    // *********** LOGOUT BTN CANCLE ***********//
    $("#logout_user_cancle_btn").click(function(e){
        e.preventDefault()
        $("#logout_preloader_container").hide()
    })
    
    
    // *********** LOGOUT DARKSKIN CANCLE ***********//
    $(".logout-preloader-dark-theme").click(function(e){
        $("#logout_preloader_container").hide()
    })
    
    
    
    
    
    
    
        // end of document
    });