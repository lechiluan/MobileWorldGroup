<div class="container">
    <h1><u>All Product</u></h1>
</div>
<div class="container">
    <?php

						              include_once("connection.php");
                                      if (isset($_POST["txtSearch"])) {
                                          $data = $_POST['txtSearch'];
                                            if($data=="")
                                            {
                                              echo "<script>alert('Please Enter Data!')</script>";
                                              echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                                            }
                                           else {
		  				   	        $result = mysqli_query($conn, "SELECT * FROM product where product_id like '%".$data."%' or product_name like '%".$data."%'");
    			                if(mysqli_num_rows($result)==0)
                          {
                            echo  "<script>alert('No find data. Please Enter Again!')</script>";
                            echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                          }
                          else {
                           if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
                            else {
			                    while($row = db_fetch_assoc($result)){
				                  ?>
    <!--Display product-->
    <div class="col-sm-3">
        <div class="card">
            <img src="product-imgs/<?php echo $row['pro_image']?>" style="width:100%">
            <h4 class="name"><a
                    href="?page=quanly_chitietsanpham&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name']?></a>
            </h4>
            <div class="price"><ins>$ <?php echo  $row['price']?></ins> <del class="oldprice">
                    $<?php echo  $row['oldprice']?></del></div>
            <p><button><a href="?page=cartfuntion&ma=<?php echo  $row['product_id']?>">Add to Cart</a></button></p>
        </div>
    </div>
    <?php
				}
      }
    }
  }
}
?>
</div>