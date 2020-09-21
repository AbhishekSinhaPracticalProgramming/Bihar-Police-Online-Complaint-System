<html>
<head><title>Insert data</title>
<link rel="stylesheet" href="sign.css">

</head>
<body>

<div id="container">
<div id="log">

<img src="avatar123.png" class="avatar">
<form class="login" action="" method="post">

<table align ="center" style ="margin-top:100px";>

<tr>
<td> <h2>First Name</h2> </td><td><input type="text" class="input" name="fname" placeholder="First Name" required="required"/></td>
</tr>

<tr>
<td> <h2>Last Name</h2> </td><td><input type="text" class="input" name="lname" placeholder="Last Name" required="required"/></td>
</tr>

<tr>
<td> <h2>Country</h2> </td><td><input type="text" class="input" name="country" placeholder="Country" required="required"/></td>
</tr>

<tr>
<td> <h2>Mobile</h2> </td><td><input type="text" class="input" name="mobile" placeholder="mobile" required="required"/></td>
</tr>

<tr>
<td> <h2>Em@il</h2> </td><td><input type="text" class="input" name="email" placeholder="Email" required="required"/></td>
</tr>
<tr>
<td><h2>Password: </h2></td><td><input type="password" class="input" name="password" placeholder="Enter Password" required="required"/></td>
</tr>


<td>
<input type="radio" name="gender" value="male" checked> Male<br>
</td>

<td>
<input type="radio" name="gender" value="male" > Female<br>
</td>

<td>
<input type="radio" name="gender" value="male" > Other<br>
</td>

<tr>



</tr>



<tr>

<td colspan ="2" align="center"><input type="submit" name="submit" id="btn" value="Sign in"/> </td>
</tr>

</table>


<h2><a href="login.php">Click here for log in</a></h2>



</form>

</div>
</div>

</body>
</html>



<?php
error_reporting(0);
$fname= $_POST['fname'];
$lname=$_POST['lname'];
$country= $_POST['country'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$gender=$_POST['gender'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root','','policecomplain_sign_in');

if(!empty($_POST['mobile']))
{
$mobile=$_POST['mobile'];

// $result=mysqli_query($con,"SELECT `mobile` FROM `users` WHERE `mobile`='$mobile'");
// $count=mysqli_num_rows($result);

$sql = "SELECT mobile FROM policecomplain_sign_in.$mobile WHERE mobile = $mobile ";
$result = $con->query($sql);
//echo $sql;

if ($result->num_rows > 0) 
{
    echo "<div id='msg'><span style=color:'red' >Already exist !!  </span></div>";

}
else{
echo "<div id='msg'><span style=color:'green' >Available . </span></div>";


$query=" CREATE TABLE `policecomplain_sign_in`.`$mobile` ( `fname` TEXT NULL , `lname` TEXT NULL , `country` TEXT NULL , `email` TEXT NULL , `mobile` TEXT NULL , `gender` TEXT NULL , `password` TEXT NULL ) ENGINE = InnoDB;   ";


$run=mysqli_query($con,$query);


$query="INSERT INTO `policecomplain_sign_in`.`$mobile` (`fname`, `lname`,`country`,`email`, `mobile`,`gender`, `password`) VALUES ('$fname','$lname','$country', '$email', '$mobile','$gender' ,'$password');";


$run=mysqli_query($con,$query);
if($run==TRUE)
	{echo "Sucessfully1";
	header("location:plogin.php");
	}
else
	echo "error!";


}
}

?>
