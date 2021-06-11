
<!-- AVATAR MODAL POPUP START -->
<section class="toggle-popup-modal modal-popup-containe" id="banner_popup_section">
    <div class="banner-modal-container">
        <div class="banner-modal-dark-theme">
            <div class="banner-inner-content">
                <div class="btn-close-container">
                    <button class="modal-btn-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="title-header">
                    <h4>Profile banner</h4>
                    <p>Select your prefered profile banner</p>
                    <!-- <p id="uploading_alert_msg"></p> -->
                </div>
                <div class="banner-body-container" id="banner_body_container">
                    <div class="banner-preview-container">
                        <div class="banner-preview" id="banner_preview_image">
                            <img src="images/profile-banner/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="banner-body">
                        <ul>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/1.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/2.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/3.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/9.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/4.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/5.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/6.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/7.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/8.jpg" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="banner-img"><img src="images/profile-banner/9.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="avatar-btn">
                    <a href="#" class="modal-btn-close">Cancle</a>
                    <a href="#" id="upload_profile_banner_btn" class="accept">Upload</a>
                    <!-- <input type="hidden" id="avatar_id_input" value=""> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AVATAR MODAL POPUP END -->








<script>
$(document).ready(function(){
// *********** SELECT PREVIEW BANNER *************//
$("#banner_body_container").on('click', '.banner-img', function(e){
    e.preventDefault()
    
    var image_src = $(this).children('img').attr('src')
    $("#banner_preview_image").children('img').attr('src', image_src)
})




// ********* PROFILE BANNER MODAL OPEN *************//
$("#profile_banner_open").click(function(e){
    e.preventDefault()
    $("#banner_popup_section").show()
})





// ********* CLOSE MODAL BUTTON *************//
$(".modal-btn-close").click(function(e){
    e.preventDefault()
    $(".toggle-popup-modal").hide()
})









$("#upload_profile_banner_btn").click(function(e){
    e.preventDefault()
    var banner = $("#banner_preview_image img").attr('src')

    $("#profile_banner_div").css({
        backgroundImage: 'linear-gradient(rgba(0, 0, 0, 0.274), rgba(0, 0, 0, 0.288)) , url('+banner+')'
    })
    
    remove_modal()
    $(".toggle-popup-modal").hide()
})





function remove_modal(){
    $("#access_preloader_container").show()
    setTimeout(function(){
        $("#access_preloader_container").hide()
    }, 1000)
}





// ********* CSRF PAGE TOKEN ***********//
function csrf_token(){
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("meta[name='csrf_token']").attr("content")
        }
    });
}



// end
})
</script>