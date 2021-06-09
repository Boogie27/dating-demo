<?php include('includes/header.php') ?>
<?php include('includes/navigation.php') ?>
<?php include('includes/side-navigation.php') ?>

<!-- MESSAGES HEADER START-->
<section class="message-section">
    <div class="message-container">
        <div class="title-header">
            <h4>Your messages</h4>
            <p> <a href="index.php">Home</a> - messages</p>
        </div>
        <div class="message-form">
            <form action="" method="GET">
                <input type="text" class="form-control" placeholder="Search messages">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</section>
<!-- MESSAGES HEADER START-->








<!-- MESSAGE SECTION START-->
<section class="message-section-chart">
    <div class="profile-detail-container">
            <div class="message-content"><!-- message content start -->
                <div class="message-inner-content">
                    <div class="message-img">
                        <a href="chat.php">
                            <i class="fa fa-circle active"></i>   
                            <img src="images/avatar/8.jpg" alt="user_name">
                        </a>
                    </div>
                    <ul class="ul-message">
                        <li>
                            <h5>
                                <a href="chat.php"> charles barkley  </a>  
                                <span class="badge bg-success">1</span>
                                <div class="notification-drop-down">
                                    <i class="fa fa-ellipsis-h drop-down-btn notification-icon"></i>
                                    <ul class="drop-down-body ul-notification-body">
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">mark as seen</a></li>
                                    </ul>
                                </div>
                            </h5>
                        </li>
                        <li>
                            <p>
                               <a href="chat.php" class="unread-message">Whats up nau, how are you</a>
                               <span class="float-right">2:30</span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="message-inner-content">
                    <div class="message-img">
                        <a href="chat.php">
                            <i class="fa fa-circle active"></i>   
                            <img src="images/avatar/4.jpg" alt="user_name">
                        </a>
                    </div>
                    <ul class="ul-message">
                        <li>
                            <h5>
                                <a href="chat.php"> Amaka barkley  </a>  
                                <span class="badge bg-success">1</span>
                                <div class="notification-drop-down">
                                    <i class="fa fa-ellipsis-h drop-down-btn notification-icon"></i>
                                    <ul class="drop-down-body ul-notification-body">
                                        <li><a href="#">Delete</a></li>
                                        <li><a href="#">mark as seen</a></li>
                                    </ul>
                                </div>
                            </h5>
                        </li>
                        <li>
                            <p>
                               <a href="chat.php" class="unread-message">how are you, been waiting for you</a>
                               <span class="float-right">2:30</span>
                            </p>
                        </li>
                    </ul>
                </div>
           
            </div><!-- message content end -->


            <div class="disable"> <!-- profile detail right start-->
                <div class="message-header title-header text-center">
                    <h4>You May Like</h4>
                    <p> Available lagosmatchmakers members you may also like</p>
                </div>
                <div class="you-may-like"><!-- you may like start-->
                    <div class="title-header"><h4>You May Like <span class="float-right"><a href="#"  data-modal="#member_search_form_modal"><i class="fa fa-search"></i> Search</a></span></h4></div>
                    <div class="you-may-like-body">
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/8.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">John jones</a>
                                </li>
                                <li><p>Premium</p></li>
                            </ul>
                        </div>
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/2.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">John jones</a>
                                </li>
                                <li><p>Premium</p></li>
                            </ul>
                        </div>
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/10.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">John jones</a>
                                </li>
                                <li><p>Premium</p></li>
                            </ul>
                        </div>
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/5.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">John jones</a>
                                </li>
                                <li><p>Basic</p></li>
                            </ul>
                        </div>
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/3.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Amaka jones</a>
                                </li>
                                <li><p>Premium</p></li>
                            </ul>
                        </div>
                        <div class="like-content">
                            <a href="#">
                                <img src="images/avatar/1.jpg" alt="John jones">
                            </a>
                            <ul>
                                <li>
                                    <a href="#">John jones</a>
                                </li>
                                <li><p>Basic</p></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- you may like end-->
            </div><!-- profile detail right end-->
    </div>
</section>
<!-- MESSAGE SECTION END-->





<?php include('modal_popup/member-search-modal-popup.php') ?>















<?php include('includes/footer.php') ?>