<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>





<!-- MESSAGES HEADER START-->
<section class="message-section header-container">
    <div class="message-container">
        <div class="title-header">
            <h4>Membership Level</h4>
            <p> <a href="index.php">Home</a> - Subscription</p>
        </div>
    </div>
</section>
<!-- MESSAGES HEADER START-->






<!-- SUBSCRIPTION START-->
<section class="subscription-section">
    <div class="subscription-body">
        <!-- <div class="title-header text-center">
            <p>Membership Level</p>
            <h4>Choose Our Pricing Plan</h4>
        </div> -->
        <div class="subscription-content">
            <div class="subscription-banner"><!-- subscription start-->
                <img src="images/banner/sub-2.svg" alt="">
                <ul class="ul-sub-head">
                    <li><p>Basic package</p></li>
                    <li><h3><span>₦</span>10,000</h3></li>
                    <li><p>Per Month</p></li>
                </ul>
                <ul class="ul-sub-body">
                    <li>
                        <p>By subscribing to our mailing list you will always
                            be updated with the lastest news from us.
                        </p>
                    </li>
                    <li><a href="#" class="subscrition-btn-open">Subscribe Now</a></li>
                </ul>
            </div><!-- subscription start-->
            <div class="subscription-banner"><!-- subscription start-->
                <img src="images/banner/sub-2.svg" alt="">
                <ul class="ul-sub-head">
                    <li><p>Premium package</p></li>
                    <li><h3><span>₦</span>15,000</h3></li>
                    <li><p>Per Month</p></li>
                </ul>
                <ul class="ul-sub-body">
                    <li>
                        <p>By subscribing to our mailing list you will always
                            be updated with the lastest news from us.
                        </p>
                    </li>
                    <li><a href="#" class="subscrition-btn-open">Subscribe Now</a></li>
                </ul>
            </div><!-- subscription start-->
            <div class="subscription-banner"><!-- subscription start-->
                <img src="images/banner/sub-2.svg" alt="">
                <ul class="ul-sub-head">
                    <li><p>Premium package</p></li>
                    <li><h3><span>₦</span>15,000</h3></li>
                    <li><p>Per Month</p></li>
                </ul>
                <ul class="ul-sub-body">
                    <li>
                        <p>By subscribing to our mailing list you will always
                            be updated with the lastest news from us.
                        </p>
                    </li>
                    <li><a href="#" class="subscrition-btn-open">Subscribe Now</a></li>
                </ul>
            </div><!-- subscription start-->
        </div>
    </div>
</section>
<!-- SUBSCRIPTION END-->







<!-- SUBSCRIPTION ALERT START -->
<section id="sub_confirm_container">
    <div class="sub-confirm-container">
        <div class="sub-confirm-dark-theme">
            <div class="sub-inner-content">
                <div class="text-right p-2">
                    <button class="confirm-box-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="confirm-header">
                    <p>Do you wish to subscribe to this plan?</p>
                </div>
                <div class="confirm-form">
                    <button type="button" class="confirm-btn">Subscribe Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SUBSCRIPTION ALERT END -->





<?php include('includes/footer.php') ?>



<!-- ************ SUBSCRIPTION JAVASCRIPT SECTION ************** -->
<script>
$(document).ready(function(){

// ********* CLOSE SUBSCRIPTION CONFIRM BOX *********//
$(".confirm-box-close").click(function(e){
    e.preventDefault()
    $("#sub_confirm_container").hide()
})



// ********* DARK SKIN CLOSE SUBSCRIPTION CONFIRM BOX *********//
$(window).click(function(e){
    if($(e.target).hasClass('sub-confirm-dark-theme'))
    {
        $("#sub_confirm_container").hide()
    }
})



// ********* CLOSE SUBSCRIPTION OPEN CONFIRM BOX *********//
$(".subscrition-btn-open").click(function(e){
    e.preventDefault()
    $("#sub_confirm_container").show()
})



// end
})
</script>