


<!-- EDIT DETAIL INFO START-->
<section class="modal-popup-container modal-form-section" id="report_member_section">
    <div class="edit-info-main">
        <div class="edit-info-dark-theme dark-theme-modal-popup">
            <div class="edit-info-container">
                <div class="btn-close-container">
                    <button class="modal-btn-close"><i class="fa fa-times"></i></button>
                </div>
                <div class="title-header">
                    <h4>Report Member</h4>
                    <p>We use your feeback to help us learn when something's not right.</p>
                </div>
                <div class="form-input-popup"><br>
                     <form action="" method="POST">
                        <ul class="ul-report">
                            <li><a href="#" class="report-button active">Harassmen</a></li>
                            <li><a href="#" class="report-button">Suicide or self injury</a></li>
                            <li><a href="#" class="report-button">Pretending to be someone else</a></li>
                            <li><a href="#" class="report-button">Sharing inappropriate things</a></li>
                            <li><a href="#" class="report-button">Hate speech</a></li>
                            <li><a href="#" class="report-button">Unauthrised sales</a></li>
                            <li><a href="#" id="report_button_others">Others</a></li>
                        </ul>
                        <div class="report-form" id="other_report_form">
                            <h4>Others</h4>
                            <p>Report other issues that was not listed above</p>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <textarea name="report" class="form-control" cols="30" rows="5"></textarea>
                                        <div class="alert-form text-danger"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="report-bottom">
                            <p>Jessics if someone is in immediate danger, call local services, Don't wait.</p>
                        </div>
                        <div class="row">
                           <div class="col-xl-12">
                                <div class="form-group">
                                    <button type="button" id="report_member_submit_btn" class="btn-fill-block">Send Feedback</button>
                                    <div class="form-error-alert form_alert_0 text-danger"></div>
                                </div>
                            </div>
                        </div>
                     </form>
                </div>
            <div>
        <div>
    <div>
</section>
<!-- EDIT DETAIL INFO END-->

















<script>
$(document).ready(function(){
// ***********OPEN OTHER FORM *************//
$("#report_button_others").click(function(e){
    e.preventDefault()
    $(this).toggleClass('active')
    $('#other_report_form').slideToggle()
    $('ul.ul-report li a.report-button').removeClass('active')
})



// ********* SELECT REPORT OPTIONS ********//
 $('ul.ul-report li a.report-button').click(function(e){
    e.preventDefault()

    $('ul.ul-report li a.report-button').removeClass('active')
    $(this).addClass('active') 
    $("#report_button_others").removeClass('active')
    $('#other_report_form').slideUp()
 })






// end
})
</script>