
<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>



<!-- LOGIN START-->
<section class="login-form-section">
    <div class="form-container">
        <form action="" method="POST">
            <!-- <div class="main-alert-success text-center mb-3">Network error, try again later!</div> -->
            <div class="title-header text-center">
                <h3>Register</h3>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group">
                        <div class="alert-form text-danger"></div>
                        <input type="text" class="form-control" value="" placeholder="User Name">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <div class="alert-form text-danger"></div>
                        <input type="email" class="form-control" value="" placeholder="Email">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <div class="alert-form text-danger"></div>
                        <input type="password" class="form-control" value="" placeholder="Password">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <div class="alert-form text-danger"></div>
                        <input type="password" class="form-control" value="" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6-col-sm-6 col-6">
                    <div class="form-group">
                        <input type="checkbox"> <span>Remember me</span>
                    </div>
                </div>
                <div class="col-xl-12 mt-4">
                    <div class="form-group">
                         <button type="button" class="btn-fill-block">Get Started Now</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- LOGIN END-->






<?php include('includes/footer.php') ?>