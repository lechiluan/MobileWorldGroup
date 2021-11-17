<?php
    include_once("connection.php"); 
    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('You must be login to see your cart')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
    else
    {
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
    //session_start();
    $cart = (isset($_SESSION['cart']))? $_SESSION['cart']: [];
?>

<script language="JavaScript">
function deleteConfirm() {
    if (confirm("Are you sure to delete!")) {
        return true;
    } else {
        return false;
    }
}
</script>
<H1><B>MY CART</B></H1>
<?php
    if($cart!=[])
    {
    ?>
<table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th><strong>No.</strong></th>
            <th><strong>Product Name</strong></th>
            <th><strong>Image</strong></th>
            <th><strong>Quantity</strong></th>
            <th><strong>Price</strong></th>
            <th><strong>Unit Price</strong></th>
            <th><strong>Delete</strong></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $total= 0;?>
        <?php foreach($cart as $key => $value){ 
                $total += ($value['price'] * $value['quantity']);
                ?>
        <tr>
            <td><?php echo $key++ ?></td>
            <td><?php echo $value['name']?></td>
            <td align='center' class='cotNutChucNang'>
                <img src='product-imgs/<?php echo $value['image'] ?>' border='0' width="100" height="100" />
            </td>
            <form method="GET" action="cartfuntion.php">
                <td>
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name='ma' value="<?php echo $value['id'] ?>">
                    <input type="number" size="4" name="quantity" value="<?php echo $value['quantity']?>">
                    <button type="submit" name="buttonupdate" id="buttonupdate">Update Quantity</button>
                </td>
            </form>
            <td>$<?php echo $value['price']?></td>
            <td>$<?php echo $value['price']*$value['quantity']?>
            </td>
            <td align='center' class='cotNutChucNang'>
                <a href="cartfuntion.php?ma=<?php echo $value['id'] ?>&action=delete" onclick="return deleteConfirm()">
                    <img src='images/delete.png' border='0' /></a>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="5" align="right">
                <h3>TOTAL:</h3>
            </td>
            <td>
                <h3 class="price"><b>$<?php echo Number_format($total);?></b></h3>
            </td>
            <td></td>
        </tr>
    </tbody>
</table>
<div class="container">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-8">
        <form method="POST" action="?page=payment">
            <button type="submit" name="btnOrder" class="btn btn-primary">ORDER PRODUCT</button>
        </form>
        <br>
    </div>
</div>
<?php }
    else {
        echo "<script>alert('EMPTY CART! PLEASE ADD A PRODUCT TO CART!')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
    ?>
<?php
    }
    include_once("Allproduct.php");
 ?>