<?php
include('dbcon.php');
error_reporting(0);
$Nm=$_REQUEST['Nm'];
$Lm =$_REQUEST['Lm'];
$Uid=$_REQUEST['Uid'];
$pwd=$_REQUEST['pwd'];
$Eid=$_REQUEST['Eid'];
$Pno=$_REQUEST['Pno'];
$dat=$_REQUEST['dat'];
$Sex=$_REQUEST['Sex'];
$qua=$_REQUEST['qua'];
$Addr=$_REQUEST['Addr'];

if(isset($_REQUEST['Sub']))
{
	if($Nm=="" or $Lm=="" or $Uid=="" or $pwd=="" or $Eid=="" or $Pno=="" or $Sex=="" or $dat=="" or $qua=="" or $Addr=="")
	{
	//step1: used to check field empty or not
	$error="Fill all fields!";
	}
	else
	{
		/*if(file_exists("userProfile/$id"))
		{
		//step2: if user id already taken by the other user
		$error="Id not avl....";
		}*/
		$ins="select * from userprofile where user_id='$Uid';";
		$qins=mysqli_query($con,$ins);
		while($fqins=mysqli_fetch_assoc($qins))
		{
			$chid=$fqins['user_id'];
		}
			if($chid==$Uid)
				{
				$error="Id is not Avaiable!!!";
				}
				else
				{
		//Step3: create account according to ID
		/*mkdir("userProfile/$id");
		mkdir("userProfile/$id/inbox");
		mkdir("userProfile/$id/draft");
		mkdir("userProfile/$id/sent");
		mkdir("userProfile/$id/trash");
		mkdir("userProfile/$id/spam");
		mkdir("userProfile/$id/label");
		mkdir("userProfile/$id/chatRoom");
		$data=$name."\t".$age."\t".$con."\t".$address."\t".$email;
		file_put_contents("userProfile/$id/$pwd",$data);*/
		$Into="INSERT INTO `userprofile`(`first_name`, `last_name`, `user_id`, `password`, `phone`, `email`, `dat`, `sex`, `profession`, `address`) VALUES ('$Nm','$Lm','$Uid','$pwd','$Pno','$Eid','$dat','$Sex','$qua','$Addr')";
		mysqli_query($con,$Into);
		
		$error="You are successfully registor your accout!!1";

		header("location: successfull.php");
		}
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" href="css/style.css">
 <script type="text/javascript" src="validate.js"></script>
<title>Registration Page</title>
</head>
<body>
<section class="container">
    <div class="Rlogin">
      <h1>WhizTrail User Registration details</h1>
	  <p><?php echo $error; ?></p>
      <form method="post" action="#" name="myform">
	  <table>
	  <tr>
        <td valign="middle">First Name:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="Nm"  placeholder="Enter First name" required></td><td><p name="Enm"></p></td>
		</tr> 
		<tr>
		 <td>Last Name:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="Lm"  placeholder="Enter Last name"></td>
		 </tr>
		 <tr>
		  <td>User Id:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="Uid"  placeholder="Please enter User ID"></td>
		  </tr>
		  <tr>
        <td>Password:</td><td>&nbsp;&nbsp;&nbsp;<input type="password" name="pwd" placeholder="Atleast 6 character long" ></td>
		</tr>
		<tr>
        <td>Email:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="Eid" placeholder="ezample@abc.domain"></td>
		</tr>
		<tr>
        <td>Phone:</td><td>&nbsp;&nbsp;&nbsp;<input type="text" name="Pno" value="+91" onkeyup="isNumeric(document.getElementById('Pno'), 'Numbers Only Please')"></td>
		</tr>
		 <tr>
		 <td>Sex:</td><td>&nbsp;&nbsp;&nbsp;<input type="radio" name="Sex" value="male" />Male<input type="radio" name="Sex" value="female" />Female</td>
		 </tr>
		 <tr>
		 <td>D.O.B:</td><td>&nbsp;&nbsp;&nbsp;<input type="date" name="dat"  /></td>
		 </tr>
		 <tr>
        <td>Profession:</td><td>&nbsp;&nbsp;&nbsp;<select id="sel" name="qua" ><option value="">--select--</option>
																	<option  value="business">Business</option>
																	<option  value="employee">Employee</option>
																	<option  value="student">Student</option></select></td>
		</tr>
		 <tr>
        <td valign="middle">Address:</td><td>&nbsp;&nbsp;&nbsp;<textarea id="add" name="Addr" rows="3" cols="10"></textarea></td>
		</tr>
		
    	<tr> 
        <td></td><td>&nbsp;&nbsp;&nbsp;<input type="submit" name="Sub" value="Submit"><input type="reset"  value="Reset"></p><td>
		</tr>
		</table>
      </form>
    </div>
  </section>
</body>
</html>

