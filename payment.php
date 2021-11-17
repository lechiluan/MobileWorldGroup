<?php
    include_once("connection.php");
    if(isset($_GET["btnCancel"]))
    {
        echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
    }
	if (isset($_POST['btnUpdate'])) 
			{
	if($_POST['txtDeliveryaddress']!="" && $_POST['txtDeliveryDate']!="")
	{
        $deliveryaddress = $_POST['txtDeliveryaddress'];
		$deliverydate =$_POST['txtDeliveryDate'];

        $query = "INSERT INTO orders (orderdate, deliverydate, delivery_loca, username)
				  VALUES ('".date('Y-m-d H:i:s')."', '".$deliverydate."', '".$deliveryaddress."','".$_SESSION['us']."')";
		pg_query($conn, $query) or die(pg_errormessage($conn));
        $result = pg_query($conn,"SELECT LASTVAL()") or die(pg_errormessage($conn));

        while ($row = pg_fetch_row($result)) {
            $Orid = $row[0];
        }

        // mysql_insert_id($conn);
		foreach ($_SESSION["cart"] as $key => $row) {
            $a=$row['price'];
            $b=$row['quantity'];
            $total=$a*$b;

		    $queryadd = "INSERT INTO orderdetail (orderid , product_id, price, qty, unitprice)
				VALUES ('$Orid','$key',".$row['price'].", ".$row['quantity'].",'$total')";
		    pg_query($conn, $queryadd) or die(pg_errormessage($conn));
            
            $quantity1=$row['quantity'];
		    $queryupdateprice = "UPDATE product SET pro_qty = pro_qty-$quantity1 WHERE product_id='$key'";
		    pg_query($conn, $queryupdateprice) or die(pg_errormessage($conn));
        }
		unset($_SESSION["cart"]);
		echo "<script>alert('Your order has been acknowledged, we will confirm the payment with you soon!');</script>";
		echo "<script>window.location='index.php';</script>";
	    } 
	else
	{
		echo "Please Enter Enough Information!";
	}
}
?>

<div class="container">
    <h1>ORDER DATA</h1>
    <form id="form1" class="form-horizontal" name="form1" method="POST" action="">

        <div class="form-group">
            <label for="lblDeliveryAddress" class="col-sm-2 control-label">Delivery location(*): </label>
            <div class="col-sm-10">
                <input type="text" name="txtDeliveryaddress" id="txtDeliveryaddress" class="form-control"
                    placeholder="Delivery Location" value="" />
            </div>
        </div>

        <div class="form-group">
            <label for="lblDeliveryDate" class="col-sm-2 control-label">Delivery Date(*): </label>
            <div class="col-sm-10">
                <input name="txtDeliveryDate" id="txtDeliverylocal" type='date' class="form-control" />
            </div>
        </div>
</div>
<div class="container">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
        <input type="submit" name="btnUpdate" class="btn btn-primary" id="btnUpdate" value="Update" />
        <input name="btnCancel" type="button" class="btn btn-primary" id="btnBoQua" value="Cancel"
            onclick="window.location='index.php'" />
    </div>
</div>
</form>
</div>

<br>
<br>