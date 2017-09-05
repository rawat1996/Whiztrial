<?php
session_start();
error_reporting(0);
include('dbcon.php');
$id = $_REQUEST['id'];
$pwd = $_REQUEST['pwd'];
if(isset($_REQUEST['commit']))
{
	if($id=="" or $pwd=="")
	{
	//step1: used to check field empty or not
	$error="Please Enter valid Id and Password!!!";
	}
	else
	{

		/*if(file_exists("userProfile/$id") and file_exists("userProfile/$id/$pwd"))
		{
		//step2: if user id and Pwd both true: redirect to userAccount
		$_SESSION['sId']=$id;
		header("location: userAccount.php");
		}
		else
		{
		//Step3: if ID or PWD wrong error
		$error="Invalid Id or Pwd";
		}*/
		$ins = "Select * from userprofile where user_id ='$id';";
		$qins= mysqli_query($con,$ins);
		while($fqins=mysqli_fetch_assoc($qins))
		{
			$cid=$fqins['user_id'];
			$cpwd=$fqins['password'];		
		}
			if($id==$cid and $pwd==$cpwd )
				{
					$_SESSION['sId']=$id;
					header("location: welcome.php");
				}
				else
				{
					$error="Invalid ID or Password";
				}
	}
}
?>


<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div id="Ldiv1" class="login">
      <h1>WhizTrial login</h1>
      <form method="post" action="index.php">
	  <P><?php echo $error; ?></P>
        <p><input id="Lid" type="text" name="id"  placeholder="Username or Email"></p>
        <p><input id="Lpwd" type="password" name="pwd"  placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input  type="checkbox" name="remember_me" id="Rem">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input id="Lsub" type="submit" name="commit" value="Login"></p>
      </form>
    </div>

    <div id="Ldiv2" class="login-help">
	<p><a id="LNA" href="Welcome.php">Go to Welcome Site withour ID and password</a></p>
	<p><a id="Cnew"  href="regtration.php">Create New Account</a></p>
      <p>Forgot your password? <a id="Lres" href="reset.php">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links" >
      <a id="Labo" href="http://www.whiztrain.com/about.html" target="_parent">About Us</a>
	  <a id="Lcon" href="http://www.whiztrain.com/contact.html" target="_parent">Contact Us</a>
    </p>
    <p class="about-author">
      &copy; 2013&ndash;2014 <a href="http://whizTrain.com" target="_blank">WhizTrial</a> 
      Original PSD by <a href="http://www.premiumpixels.com/freebies/clean-simple-login-form-psd/" target="_blank"></a></p>
	 <a href="http://www.whiztrain.com"> <img id="Limg" src="Whiz.jpg" ></a>
  </section>
  
</body>
</html>

