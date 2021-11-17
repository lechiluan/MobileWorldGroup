<?php
    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('You must be login to sent feedback')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    }
    else
    {
  ?>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/responsive.css">
<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>

<?php 

	if (isset($_POST['btnSummit'])) 
	{
	  if($_POST['txtEmail']!="" && $_POST['txtMessage']!="")
	    { 
        include_once("connection.php");
        $us=$_SESSION['us'];
        $email=$_POST['txtEmail'];
        $mess=$_POST['txtMessage'];
        pg_query($conn,"INSERT INTO feedback (username, email, message) VALUES ('$us','$email','$mess')");
        echo "<script>alert('Thank you for sending us feedback. We will get back to you as soon as possible!');</script>";
        echo "<script>window.location='index.php';</script>";
	    } 
	else
	{
		echo "Please Enter Enough Information!";
	}
}
?>






<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center">Feedback</legend>

                        <!-- Name input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="name">Name</label>
                            <div class="col-md-9">
                                <input id="txtName" name="txtName" type="text" placeholder="Your name"
                                    class="form-control" value="<?PHP echo $_SESSION['us'];?>" readonly>
                            </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">Your E-mail</label>
                            <div class="col-md-9">
                                <input id="txtEmail" name="txtEmail" type="text" placeholder="Your email"
                                    class="form-control">
                            </div>
                        </div>

                        <!-- Message body -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="message">Your message</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="txtMessage" name="txtMessage"
                                    placeholder="Please enter your message here..." rows="5"></textarea>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                <button type="submit" class="btn btn-primary btn-lg" id="btnSummit"
                                    name="btnSummit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    }
    ?>