<?php

$fname= $_POST['fname'];
$lname=$_POST['lname'];
$country= $_POST['country'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$gender=$_POST['gender'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root','','complain_sign_in');

<?php
$con=mysqli_connect('localhost','root','','complain_sign_in');
if(!empty($_POST['mobile']))
{
$mobile=$_POST['mobile'];
//error_reporting(0);
// $result=mysqli_query($con,"SELECT `mobile` FROM `users` WHERE `mobile`='$mobile'");
// $count=mysqli_num_rows($result);

$sql = "SELECT mobile FROM complain_sign_in.$mobile WHERE mobile = $mobile ";
$result = $con->query($sql);
echo $sql;

if ($result->num_rows > 0) 
{
    echo "<div id='msg'><span style=color:'red' >Already exist . </span></div>";

}
else{
echo "<div id='msg'><span style=color:'green' >Available . </span></div>";


$query=" CREATE TABLE `complain_sign_in`.`$mobile` ( `fname` TEXT NULL , `lname` TEXT NULL , `country` TEXT NULL , `email` TEXT NULL , `mobile` TEXT NULL , `gender` TEXT NULL , `password` TEXT NULL ) ENGINE = InnoDB;   ";


$run=mysqli_query($con,$query);


$query="INSERT INTO `$mobile` (`fname`, `lname`,`country`,`email`, `mobile`,`gender`, `password`) VALUES ('$fname','$lname','$country', '$email', '$mobile','$gender' ,'$password');";


$run=mysqli_query($con,$query);
if($run==TRUE)
	{echo "Sucessfully1";
	header("location:login.php");
	}
else
	echo "error!";


}
}



?>






