<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>






<!-- FORGOT PASSWORD START-->
<section class="login-form-section">
    <div class="form-container">
        <form action="" method="POST">
            <div class="title-header text-center">
                <h3>Forgot password</h3>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group">
                        <div class="alert-form text-danger"></div>
                        <input type="email" name="email" class="form-control" value="" placeholder="Email">
                    </div>
                </div>
                <div class="col-xl-12 mt-4">
                    <div class="form-group">
                         <button type="submit" class="btn-fill-block">Receive Password</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- FORGOT PASSWORD END-->







<?php include('includes/footer.php') ?>