<?php   
    session_start();
    include_once("connection.php"); 
    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('You must be login add product to cart')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
else
    {   
        include_once("connection.php");
        if(isset($_GET['ma'])){
            $id = $_GET['ma'];
        }
        if(isset($_GET['action'])){
            $action = ($_GET['action']);
        }
        else
        {
            $action='add';
        }
        
        if(isset($_GET['quantity'])){
            $quantity = $_GET['quantity']; 
        }
        else
        {
            $quantity=1;
        }
        if($quantity<=0)
        {
            $quantity=1;
        }

        $result = pg_query($conn,"SELECT * FROM product where product_id='$id'");
    
    if($result)
    {
        $product = pg_fetch_assoc($result);
    }

    $item = [
        'id'=>$product['product_id'],
        'name'=>$product['product_name'],
        'image'=>$product['pro_image'],
        'price'=>$product['price'], 
        'quantity'=>$quantity
    ];
    
    if($action  == 'add')
    {
        if(isset($_SESSION['cart'][$id])){
            if($quantity > $product['pro_qty'])
            {
                echo "<script>alert('Your quantity is bigger than the quantity in our stock.')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
            }
            else
            {
                $_SESSION['cart'][$id]['quantity'] += $quantity;
                echo "<script>alert('Add Product to cart successful')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
            }
        }
        else 
        {
            if($quantity > $product['pro_qty'])
            {
                echo "<script>alert('Your quantity is bigger than the quantity in our stock.')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php">';
            }
            else
            {
                $_SESSION['cart'][$id]= $item;
                echo "<script>alert('Add Product to cart successful')</script>";
                echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
            }
        } 
    }
    if($action=='update')
    {
        if($_GET["quantity"] > $product['pro_qty'])
        {
            echo "<script>alert('Your quantity is bigger than the quantity in our stock.')</script>";
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
        }
        else
        {
            $_SESSION['cart'][$id]['quantity'] = $quantity;
            echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
        }
        
    }
    if($action=='delete')
    {
        unset($_SESSION['cart'][$id]);
        echo '<meta http-equiv="refresh" content="0;URL=index.php?page=viewcart">';
    }
    }
?>