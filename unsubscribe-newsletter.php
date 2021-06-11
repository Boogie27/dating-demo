<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>




<!-- MESSAGES HEADER START-->
<section class="message-section">
    <div class="message-container">
        <div class="title-header">
            <h4>Unsubscribe Newsletter</h4>
            <p> <a href="index.php">Home</a> - unsubscribe newsletter</p>
        </div>
    </div>
</section>
<!-- MESSAGES HEADER START-->










<!-- UNSUBSCRIBE NEWSLETTER START-->
<section class="news-letter-section">
    <div class="unsubcribe-newsletter">
        <form action="" method="POST">
            <div class="form-group">
                <input type="email" id="unsub_news_letter_email_input" class="form-control" placeholder="Enter email" required>
                <div class="alert-form newsletter-alert text-danger"></div>
            </div>
            <div class="form-group">
                <button type="button" id="unsub_news_letter_submit_btn" class="news-letter-btn"><i class="far fa-envelope"></i> Unsubscribe Newsletter</button>
            </div>
        </form>
    </div>
</section>

<!-- UNSUBSCRIBE NEWSLETTER START-->








<?php include('includes/footer.php') ?>