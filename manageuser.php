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
                <th><strong>Customer Name</strong></th>
                <th><strong>Gender</strong></th>
                <th><strong>Address</strong></th>
                <th><strong>Phone</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Customer Birthday</strong></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once("connection.php");
                $No=1;
                $result = pg_query($conn,"SELECT *
                From customer") or die(pg_errormessage($conn));
                while($row = pg_fetch_array($result,Null, PGSQL_ASSOC))
                { 
            ?>
            <tr>
                <td><?php echo $No; ?></td>
                <td><?php echo $row["username"]?></td>
                <td><?php echo $row["custname"]?></td>
                <td><?php echo $row["gender"] ?></td>
                <td><?php echo $row["address"]?></td>
                <td><?php echo $row["telephone"]?></td>
                <td><?php echo $row["email"]?></td>
                <td>
                <?php echo $row["cusdate"] ?>/<?php echo $row["cusmonth"]?>/<?php echo $row["cusyear"]?>
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