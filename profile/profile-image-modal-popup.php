
<!-- AVATAR MODAL POPUP START -->
<section class="avatar-popup-modal modal-popup-container" id="avatar_popup_section">
    <div class="avatar-modal-container">
        <div class="avatar-modal-dark-theme">
            <div class="avatar-inner-content">
                <div class="btn-close-container">
                    <button class="modal-btn-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="title-header">
                    <h4>Display Image</h4>
                    <p>Select your prefered display image</p>
                </div>
                <div class="avatar-body-container">
                    <div class="avatar-img-preview" id="vatar_img_preview"><!-- avatar img preview start-->
                        <img src="images/avatar/1.jpg" alt="">
                    </div> <!-- avatar img preview end-->
                    <div class="avatar-body"><!-- avatar img  start-->
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/1.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/2.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/5.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/4.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/7.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/8.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/9.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/10.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/3.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/11.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/12.jpg" alt=""></a>
                        </div>
                        <div class="avatar-img">
                            <a href="#"><img src="images/avatar/13.jpg" alt=""></a>
                        </div>
                    </div><!-- avatar img  end-->
                </div>
                <div class="avatar-btn">
                    <a href="#" id="avatar_modal_close">Cancle</a>
                    <a href="#" id="upload_profile_image_btn" class="accept">Upload</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- AVATAR MODAL POPUP END -->










<!-- ************ SCRIPT ***************** -->
<script>
$(document).ready(function(){
// ******* CLICK TO PICK AVATAR ********//
$(".avatar-img a").click(function(e){
    e.preventDefault()
    var image_src = $(this).children('img').attr('src')
    $("#vatar_img_preview").children('img').attr('src', image_src)
})







// ********* AVATAR MODAL CLOSE *************//
$("#avatar_modal_close").click(function(e){
    e.preventDefault()
    $("#avatar_popup_section").hide()
})




// ********* UPLOAD PROFILE IMAGE *************//
$("#upload_profile_image_btn").click(function(e){
    e.preventDefault()
    var image_src = $("#vatar_img_preview").children('img').attr('src')
    $("#profile_image_img").attr('src', image_src)
    $("#avatar_popup_section").hide()
    preloader_toggle()
})


  

// ********** REMOVE ACCESS PRELOADER ***********//
function preloader_toggle(){
    $("#access_preloader_container").show()
    setTimeout(function(){
        $("#access_preloader_container").hide()
    }, 1000)
}


// end
})
</script>