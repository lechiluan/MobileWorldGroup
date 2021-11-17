<!DOCTYPE html>
<html lang="en">

<head>
    <title>MobileWorld.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<?php 
 session_start();
 include_once("connection.php");
 if(!isset($_SESSION['cart']))
 {
 $_SESSION['cart'] = array();
 }
 $cart = (isset($_SESSION['cart']))? $_SESSION['cart']: [];
?> 

<body class="body">
    <nav class="navbar navbar-inverse" id="nav_home">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <class class="navbar-brand"></class><a href="index.php"><img src="images/LogoMW.png" width="160"
                        height="60" alt="MobileWorld Shop"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Product Category<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=allproduct">All Product</a></li>
                            <li><a href="?page=phone">SmartPhone</a></li>
                            <li><a href="?page=tablet">Tablet</a></li>
                            <li><a href="?page=watch">Watch</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Management<span
                                class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="?page=product_management">Product Management</a></li>
                            <li><a href="?page=category_management">Category Management</a></li>
                            <li><a href="?page=seefeedback">Feedback of customers</a></li>
                            <li><a href="?page=seeorder">Order Management</a></li>
                            <li><a href="?page=seeorderdetail">Order Detail Management</a></li>
                            <li><a href="?page=seeuser">User Management</a></li>
                        </ul>
                    </li>
                    <li><a href="?page=aboutus">About Us</a></li>
                    <li><a href="?page=contactus">Contact Us</a></li>
                    <li><a href="?page=feedback">Feedback</a></li>
                    <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                if(isset($_SESSION['us']) && $_SESSION['us'] !="")
                {
            ?>
                    <li><a href="?page=viewcart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
                            (<?php echo count($cart)?>)</a></li>
                    <li><a href="?page=update_customer"><span class="glyphicon glyphicon-user"></span> Hi,
                            <?php echo $_SESSION['us'] ?></a></li>
                    <li><a href="?page=logout"><span class="glyphicon glyphicon-logout"></span> Log out</a></li>
                    <?php
                }
                else {
          ?>
                    <li><a href="?page=viewcart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                    <li><a href="?page=register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                    <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php
                }
            ?>
                </ul>
            </div>
        </div>
    </nav>


    <?php
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
            if($page=="login")
            {
                include_once("Login.php");
            }
            else if($page=="register")
            {
                include_once("Register.php");
            }
            else if($page=="product_management")
            {
                include_once("Product_Management.php");
            }
            else if($page=="category_management")
            {
                include_once("Category_Management.php");
            }
            else if($page=="add_category")
            {
                include_once("Add_Category.php");
            }
            else if($page=="update_category")
            {
                include_once("Update_Category.php");
            }
            else if($page=="add_product")
            {
                include_once("Add_Product.php");
            }
            else if($page=="update_product")
            {
                include_once("Update_Product.php");
            }
            else if($page=="logout")
            {
                include_once("logout.php");
            }
            else if($page=="aboutus")
            {
                include_once("AboutUs.php");
            }
            else if($page=="contactus")
            {
                include_once("ContactUs.php");
            }
            else if($page=="feedback")
            {
                include_once("Feedback.php");
            }
            else if($page=="productdetail")
            {
                include_once("productdetail.php");
            }
            else if($page=="allproduct")
            {
                include_once("Allproduct.php");
            }
            else if($page=="phone")
            {
                include_once("phone.php");
            }
            else if($page=="tablet")
            {
                include_once("tablet.php");
            }
            else if($page=="watch")
            {
                include_once("watch.php");
            }
            else if($page=="search")
            {
                include_once("Search.php");
            }
            else if($page=="update_customer")
            {
                include_once("Update_customer.php");
            }
            else if ($page=="viewcart")
            {
              include_once("view-cart.php");
            }
            else if ($page=="payment")
            {
              include_once("payment.php");
            }
            else if ($page=="seefeedback")
            {
              include_once("seefeedback.php");
            }
            else if ($page=="seeorder")
            {
              include_once("seeorder.php");
            }
            else if ($page=="seeorderdetail")
            {
              include_once("seeorderdetail.php");
            }
            else if ($page=="seeuser")
            {
              include_once("manageuser.php");
            }
        }
        else {
            include_once("homepage.php");
        }
	?>


    <footer class="footer">
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-3">
                    <a href="index.php"><img src="images/LogoMW.png" width="360" height="80" alt="MobileWorld Shop"></a>
                </div>
                <div class="col-sm-3">
                    <h3>CONTACT US</h3>
                    <p><span class="glyphicon glyphicon-map-marker"></span><a
                            href="https://www.google.com/maps/place/160+%C4%90%C6%B0%E1%BB%9Dng+30+Th%C3%A1ng+4,+Xu%C3%A2n+Kh%C3%A1nh,+Ninh+Ki%E1%BB%81u,+C%E1%BA%A7n+Th%C6%A1,+Vietnam/@10.0283179,105.7782818,19.22z/data=!4m5!3m4!1s0x31a088216a9ce555:0xc42730e6d0681b82!8m2!3d10.02831!4d105.7782105?hl=en"
                            target="_blank">
                            &nbsp; 160 30/4 Stress, Xuan Khanh Ward, Ninh Kieu District, Can Tho City</p></a>
                    <p><span class="glyphicon glyphicon-phone"></span><a href="tel:0386363677"> &nbsp; Phone:
                            0386.36.36.77
                    </p></a>
                    <p><span class="glyphicon glyphicon-envelope"></span><a href="mailto:luanlcgcc19023@fpt.edu.vn">
                            &nbsp;
                            Luanlcgcc19023@fpt.edu.vn</p></a>
                    <p><i class="fa fa-facebook-square"></i><a href="https://www.facebook.com/chiluanIT/"
                            target="_blank"></i>
                            &nbsp; Facebook: Mobile World Store</a></p>
                    <p><i class="fa fa-youtube-play"></i><a
                            href="https://www.youtube.com/channel/UCrPtllO8vMav1uVaepmqp7A" target="_blank"></i>
                            &nbsp;Youtube: Mobile World Store</a></p>
                </div>
                <div class="col-sm-3">
                    <h3>LINK</h3>
                    <h4><a href="index.php">Home</a></h4>
                    <h4><a href="?page=aboutus">About Us</a></h4>
                    <h4><a href="?page=contactus">Contact Us</a></h4>
                    <h4><a href="?page=feedback">Feedback</a></h4>
                </div>
                <div class="col-sm-3">
                    <h3>CATEGORIES</h3>
                    <h4><a href="?page=allproduct">All Product</a></h4>
                    <h4><a href="?page=phone">SmartPhone</a></h4>
                    <h4><a href="?page=tablet">Tablet</a></h4>
                    <h4><a href="?page=watch">Watch</a></h4>
                </div>
            </div>
        </div>
    </footer>
    <p Align="center"><i><b>MobileWorld Store ©2021 All rights reserved. Website design is developed by Le Chi
                Luan</b></i>
</body>
</p>