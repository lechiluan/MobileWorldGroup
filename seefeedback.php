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
                <th><strong>No.</strong></th>
                <th><strong>Username</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Message</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("connection.php");
                $No=1;
                $result = pg_query($conn,"SELECT * FROM feedback");
                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC))
                { 
            ?>
            <tr>
                <td class="cotCheckBox"><?php echo $No; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["message"]?></td>
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