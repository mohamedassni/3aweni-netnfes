
<?php
session_start();
include("header.php");
require_once("dbcontroller.php");
$con = mysqli_connect("localhost","root","","oxsgin");
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE email='$email'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $username;
            // Redirect user to index.php
	    header("Location: add.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>سجل الدخول</h1>
<form action="" method="post" name="login">
<input type="text" name="email" placeholder="الايميل" required />
<input type="password" name="password" placeholder="كلمة السر" required /> 
<br>
<input name="submit" type="submit" value="Login" />
</form>
<p>ليس لديك حساب افتح حساب  <a href='registration.php'>من هنا</a></p>
</div>
<?php } ?>
</body>
</html>