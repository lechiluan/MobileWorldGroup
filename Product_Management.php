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
<link rel="stylesheet" href="css/bootstrap.min.css">
<script language="JavaScript">
function deleteConfirm() {
    if (confirm("Are you sure to delete!")) {
        return true;
    } else {
        return false;
    }
}
</script>
<?php
        include_once("connection.php");
        if(isset($_GET["function"])=="del")
        {
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                $sq = "SELECT pro_image from product WHERE product_id='$id'";
                $res = pg_query($conn,$sq);
                $row = pg_fetch_array($res, Null, PGSQL_ASSOC);
                $filePic = $row['pro_image'];
                unlink("product-imgs/".$filePic);
                pg_query($conn,"DELETE FROM product WHERE product_id='$id'");
            }
        }
    ?>
<form name="frm" method="post" action="">
    <p>
        <img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" /><a href="?page=add_product"> Add
            new</a>
    </p>
    <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><strong>No.</strong></th>
                <th><strong>Product ID</strong></th>
                <th><strong>Product Name</strong></th>
                <th><strong>Price</strong></th>
                <th><strong>Quantity</strong></th>
                <th><strong>Category ID</strong></th>
                <th><strong>Image</strong></th>
                <th><strong>Edit</strong></th>
                <th><strong>Delete</strong></th>
            </tr>
        </thead>

        <tbody>
            <?php
                include_once("connection.php");
				$No=1;
                $result= pg_query($conn,"SELECT product_id, product_name, price, pro_qty, pro_image, cat_name
                FROM product a, category b
                Where a.cat_id = b.cat_id 
                ORDER BY prodate DESC");

                while($row=pg_fetch_array($result,Null,PGSQL_ASSOC))
                {
			?>
            <tr>
                <td><?php echo $No; ?></td>
                <td><?php echo $row["product_id"]; ?></td>
                <td><?php echo $row["product_name"]; ?></td>
                <td><?php  echo $row["price"];?></td>
                <td><?php echo $row["pro_qty"];?></td>
                <td><?php  echo $row["cat_name"];?></td>
                <td align='center' class='cotNutChucNang'>
                    <img src='product-imgs/<?php echo $row['pro_image']?>' border='0' width="50" height="50" />
                </td>
                <td align='center' class='cotNutChucNang'><a
                        href="?page=update_product&&id=<?php echo $row["product_id"]; ?>">
                        <img src='images/edit.png' border='0' /></a></td>
                <td align='center' class='cotNutChucNang'>
                    <a href="?page=product_management&&function=del&&id=<?php echo $row["product_id"]; ?>"
                        onclick="return deleteConfirm()">
                        <img src='images/delete.png' border='0' /></a>
                </td>
            </tr>
            <?php
                    $No++;
                }
			?>
        </tbody>

    </table>
</form>
<?php
    }
 ?>