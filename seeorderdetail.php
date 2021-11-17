<?php
    if(!isset($_SESSION['admin']) or $_SESSION['admin']==0)
    {
        echo "<script>alert('You are not administration')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
    else
    {
?>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<form name="frm" method="post" action="">
    <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><strong>Order ID</strong></th>
                <th><strong>Order Date</strong></th>
                <th><strong>Delivery Date</strong></th>
                <th><strong>Delivery Location</strong></th>
                <th><strong>Username</strong></th>
                <th><strong>Product ID</strong></th>
                <th><strong>Image</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Quantity</strong></th>
                <th><strong>Unit Price</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("connection.php");
                $result = pg_query($conn,"SELECT a.orderid, orderdate, deliverydate, delivery_loca, username,
                c.product_id, pro_image, b.price, qty, unitprice
                From orders as a, orderdetail as b, product as c
                Where a.orderid = b.orderid and b.product_id=c.product_id") or die(pg_errormessage($conn));
                while($row = pg_fetch_array($result,NULL, PGSQL_ASSOC))
                { 
            ?>
            <tr>
                <td><?php echo $row["orderid"]; ?></td>
                <td><?php echo $row["orderdate"]?></td>
                <td><?php echo $row["deliverydate"]?></td>
                <td><?php echo $row["delivery_loca"]; ?></td>
                <td><?php echo $row["username"]?></td>
                <td><?php echo $row["product_id"]?></td>
                <td align='center' class='cotNutChucNang'>
                    <img src='product-imgs/<?php echo $row['pro_image']?>' border='0' width="50" height="50" />
                </td>
                <td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["qty"]?></td>
                <td><?php echo $row["unitprice"]?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</form>
<?php
            }
            ?>