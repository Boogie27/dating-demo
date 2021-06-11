<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>



<!-- SETTINGS HEADER START-->
<section class="message-section">
    <div class="message-container">
        <div class="title-header">
            <h4>Settings</h4>
            <p> <a href="index.php">Home</a> - Settings</p>
        </div>
    </div>
</section>
<!-- SETTINGS HEADER START-->







<!-- CHANGE PASSWORD START-->
<section class="settings-section">
    <div class="setting-container">
        <div class="settings-body"><!-- settings start-->
            <div class="title-header">
                <h4>Update User Name</h4>
                <p>Change current user name details </p>
            </div>
            <div class="content-body-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <input type="text" name="user_name" class="form-control" placeholder="Enter New Username">
                                <div class="alert-form text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="news-letter-btn"><i class="fa fa-user"></i> Update Username</button>
                    </div>
                </form>
            </div>
        </div><!-- settings end-->
        <div class="settings-body"><!-- settings start-->
            <div class="title-header">
                <h4>Change password</h4>
                <p>Update your current password by filling in a form</p>
            </div>
            <div class="content-body-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <input type="password" name="old_password" class="form-control" placeholder="Enter Old Password">
                                <div class="alert-form text-danger"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="new_password" class="form-control" placeholder="Enter New password" required>
                                <div class="alert-form text-danger"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm password" required>
                                <div class="alert-form text-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="news-letter-btn"><i class="fa fa-key"></i> Update Password</button>
                    </div>
                </form>
            </div>
        </div><!-- settings end-->
    </div>
</section>

<!-- CHANGE PASSWORD START-->







<?php include('includes/footer.php') ?>