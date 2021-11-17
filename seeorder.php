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
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("connection.php");
                $result = pg_query($conn,"SELECT orderid, orderdate, deliverydate, delivery_loca, username FROM orders") or die(pg_errormessage($conn));
                while($row = pg_fetch_array($result, NUll, PGSQL_ASSOC))
                { 
            ?>
            <tr>
                <td><?php echo $row["orderid"]; ?></td>
                <td><?php echo $row["orderdate"]?></td>
                <td><?php echo $row["deliverydate"]?></td>
                <td><?php echo $row["delivery_loca"]; ?></td>
                <td><?php echo $row["username"]?></td>
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