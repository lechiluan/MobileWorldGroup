<div class="container">
    <h3><u><b>SmartPhones</b></u></h3>
</div>
<div class="container">
    <?php
		include_once("connection.php");
		$result = mysqli_query($conn, "SELECT * FROM product Where Cat_ID='C01'");

    	if (!$result) { //add this check.
        die('Invalid query: '.mysqli_error($conn));
        }
	    while($row = db_fetch_assoc($result)){
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