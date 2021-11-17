<title>MobileWorld.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<body>
    <?php
    if(isset($_POST['btnCancel']))
    {
        echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
    }
    if(isset($_POST['btnLogin']))
    {   
        $us = $_POST['txtUsername'];
        $us = pg_escape_string($conn,$us);
        $pa = $_POST['txtPass'];
        $err="";
        if($us == "")
        {
            $err.="Enter user name please <br/>";
        }
        if($pa == "")
        {
            $err.="Enter password please <br/>";
        }
        if($err != "")
        {
            echo $err;
        }
        else
        {
            /*echo "You are logged in with $us and password $pa";*/
            include_once("connection.php");
            $pass = md5($pa);
            $res = pg_query($conn,"SELECT Username, Password, state FROM customer WHERE Username='$us' AND Password='$pass'") or die(pg_errormessage($conn));
            $row=pg_fetch_array($res, Null, PGSQL_ASSOC);
            if(pg_num_rows($res)==1)
            {
                $_SESSION['us']=$us;
                $_SESSION['admin']=$row["state"];
                echo '<meta http-equiv="refresh" content="0;URL=index.php"/>';
            }            
            else
            {
                echo "You are logged in fail";
            }
        }
    }
?>

    <h1>From Login</h1>
    <h3>Login to continue</h3>

    <form id="form1" name="form1" method="POST">

        <div class="row">
            <div class="form-group">
                <label for="txtUsername" class="col-sm-2 control-label">Username(*): </label>
                <div class="col-sm-10">
                    <input type="text" name="txtUsername" id="txtUsername" class="form-control" placeholder="Username"
                        value="" />
                </div>
            </div>

            <div class="form-group">
                <label for="txtPass" class="col-sm-2 control-label">Password(*): </label>
                <div class="col-sm-10">
                    <input type="password" name="txtPass" id="txtPass" class="form-control" placeholder="Password"
                        value="" />
                    <br>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <input type="submit" name="btnLogin" class="btn btn-primary" id="btnLogin" value="Login" />
                    <input type="submit" name="btnCancel" class="btn btn-primary" id="btnLogin" value="Cancel" />
                    <br><br>
                </div>
            </div>
        </div>
    </form>


</body>