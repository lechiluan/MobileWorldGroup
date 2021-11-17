<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">

<div class="container">
    <div class="col-sm-3">
        <aside id="categories">
            <div class="title"><img src="images/bullet.png" align="top" width="15" height="15" /> Categories</div>
            <ul class="menu_right">
                <li><a href="?page=phone">SmartPhone</a></li>
                <li><a href="?page=tablet">Tablet</a></li>
                <li><a href="?page=watch">Watch</a></li>
                <li><a href="?page=allproduct">All Product</a></li>
            </ul>
        </aside>
    </div>
    <div class="col-sm-6">
        <div class="w3-content w3-section" style="width: 500px;; height: 320px">
            <img class="mySlides w3-animate-fading" src="images/slide1.jpg" style="width: 500px;; height: 320px">
            <img class="mySlides w3-animate-fading" src="images/slide2.jpg" style="width: 500px;; height: 320px">
            <img class="mySlides w3-animate-fading" src="images/slide3.jpg" style="width: 500px;; height: 320px">
            <img class="mySlides w3-animate-fading" src="images/slide4.jpg" style="width: 500px;; height: 320px">
            <img class="mySlides w3-animate-fading" src="images/slide5.jpg" style="width: 500px;; height: 320px">
        </div>

        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 9000);
        }
        </script>
    </div>
    <div class="col-sm-3">
        <H3><a href="https://www.thegioididong.com/tin-tuc"><b><u>News</u></b></a>
            <H3>
                <h5 class="justify"><b><a
                            href="https://www.thegioididong.com/tin-tuc/tren-tay-sony-xperia-1-mark-iii-va-sony-xperia-5-mark-iii-1347785">
                            On the hands of Sony Xperia 1 Mark III and Sony Xperia 5 Mark III</a></b></h5>
                <p class="justify">At first glance, the Sony Xperia 1 Mark III has left a special impression with the
                    legendary OmniBalance...</p>
                <h5 class="justify"><b><a
                            href="https://www.thegioididong.com/tin-tuc/tren-tay-sony-xperia-1-mark-iii-va-sony-xperia-5-mark-iii-1347785">
                            Apple stopped signing iOS 14.4.2, users who have updated to iOS 14.5.1 cannot
                            downgrade</a></b></h5>
                <p class="justify">Apple yesterday (May 3) has released the iOS 14.5.1 and iPadOS 14.5.1 updates for
                    iPhone and iPad users...</p>
    </div>
</div>


<div class="container">
    <h3><u><b>Best Seller</b></u></h3>
</div>

<div class="container">
    <?php
		include_once("connection.php");
		$result = pg_query($conn, "SELECT * FROM product Where product_id='P01'");
    	if (!$result) { //add this check.
        die('Invalid query: ' . pg_errormessage($conn));
        }
		while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
	?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=productdetail&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$<?php echo  $row['price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="cartfuntion.php?ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
				?>
    <?php
		include_once("connection.php");
		$result = pg_query($conn, "SELECT * FROM product Where product_id='P02'");
    	if (!$result) { //add this check.
        die('Invalid query: ' . pg_errormessage($conn));
        }
		while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
	?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=productdetail&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$<?php echo  $row['price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="cartfuntion.php?ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
				?>
        <?php
		include_once("connection.php");
		$result = pg_query($conn, "SELECT * FROM product Where product_id='T01'");
    	if (!$result) { //add this check.
        die('Invalid query: ' . pg_errormessage($conn));
        }
		while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
	?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=productdetail&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$<?php echo  $row['price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="cartfuntion.php?ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
				?>
        <?php
		include_once("connection.php");
		$result = pg_query($conn, "SELECT * FROM product Where product_id='W01'");
    	if (!$result) { //add this check.
        die('Invalid query: ' . pg_errormessage($conn));
        }
		while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
	?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=productdetail&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$<?php echo  $row['price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="cartfuntion.php?ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
				?>
</div>

<?php
    include_once("smartphone.php");
    include_once("tablet.php");
    include_once("watch.php");
    include_once("Allproduct.php");
?>