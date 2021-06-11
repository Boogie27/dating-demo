<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>







<!-- UNSUB HEADER START-->
<section class="message-section">
    <div class="message-container">
        <div class="title-header">
            <h4>Contact us</h4>
            <p> <a href="index.php">Home</a> - Contact us</p>
        </div>
    </div>
</section>
<!-- UNSUB HEADER START-->





<!-- CONTACT START-->
<section class="news-letter-section">
    <div class="unsubcribe-newsletter">
        <form action="" method="POST">
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <input type="email" name="full_name" class="form-control" placeholder="Enter Full name">
                        <div class="alert-form text-danger"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        <div class="alert-form text-danger"></div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <textarea name="comment" class="form-control" cols="30" rows="5"></textarea>
                        <div class="alert-form text-danger"></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="button" class="news-letter-btn"><i class="far fa-envelope"></i> Contact us</button>
            </div>
        </form>
    </div>
</section>

<!-- CONTACT START-->











<?php include('includes/footer.php') ?>