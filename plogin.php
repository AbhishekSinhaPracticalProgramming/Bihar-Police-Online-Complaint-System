<?php 
session_start();
error_reporting(0);

?>
<html>
<head><title>Insert data</title>
<link rel="stylesheet" href="login.css">

</head>
<body>

<div id="container">
<div class="log">

<img src="avatar123.png" class="avatar">
<form class="login" action="plogin.php" method="post">

<table align ="center" style ="margin-top:100px";>

<tr>
<td> <H2>Phone no:</h2> </td><td><input type="text" class="input" name="mobile" placeholder="10-digit mobile no." required="required"/></td>
</tr>

<tr>
<td><h2>Enter password: </h2></td><td><input type="password" class="input" name="password" placeholder="Enter Password" required="required"/></td>
</tr>

<tr>

<td colspan ="2" align="center"><input type="submit" name="submit" id="btn" value="Log in"/> </td>
</tr>

</table>


<h2><a href="psignin.php">Click here for Sign in</a></h2>

</form>

</div>
</div>




</html>



<?php



$mobile= $_POST['mobile'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root','','policecomplain_sign_in');

$query="SELECT * FROM `$mobile`";


$run2=mysqli_query($con,$query);
$p=mysqli_fetch_assoc($run2);

 $fname=$p['fname'];

?>

	

    
<?php
if(!empty($password))
{
if( $run2==true and $p['password']== $password )
{$_SESSION[uname]= $fname;
$_SESSION[uname2]=$p['lname'];
$_SESSION[mobile]=$p['mobile'];
header("location:index.php");


	echo  "<div id='msg'><span > $fname  </span></div>";
	}
else{
	?>
	<script type="text/javascript"  language="javascript">
alert("Invalid mobile number or password");
</script>
	<?php
	echo "<div id='msg'><span >error!Invalid mobile number or password . </span></div>";
}
}
?>
	






