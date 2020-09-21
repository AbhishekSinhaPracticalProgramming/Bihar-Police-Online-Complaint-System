



<html>
<head>

<title>
Your Complaint
</title>
<link rel="Stylesheet" href="view.css">

</head>

<body>
<div id ="container">

<?php 

session_start();
error_reporting(0);

$mobile=$_POST['mobile'];

$con=mysqli_connect('localhost','root','','registration');
$query="SELECT * FROM `reg`";

$run2=mysqli_query($con,$query);
//$p=mysqli_fetch_assoc($run2);


/*
$con2=mysqli_connect('localhost','root','','complain_sign_in');

$query2="SELECT * FROM `$mobile`";


$run3=mysqli_query($con2,$query2);
$p1=mysqli_fetch_assoc($run3);


if($_POST['mobile']!=$p[contact] or $_POST['password']!=$p1[password]  )
{ ?>
		<script type="text/javascript"  language="javascript">
alert("Invalid mobile number or password");
</script>
	
	<?php
	
	//header('location:index.php');
	
}
*/



?>




<div id="head">

<u>Your Registered Complaint</u>

</div>



<?php

   if ($run2->num_rows > 0) { 
 while($p = $run2->fetch_assoc()) 
 {
	 
?>


<table align="center" border="2px" id="tab">
<tr>
<td>
Name
</td>



<td>
<?php echo $p['name']; ?>
</td>
</tr>

<tr>
<td>
Gender
</td>

<td>
<?php echo $p['gender'];?>
</td>
</tr>

<tr>
<td>
Contact
</td>

<td>
<?php echo $p['contact'];?>
</td>
</tr>

<tr>
<td>
Email
</td>



<td>
<?php echo $p['email'];?>
</td>
</tr>

<tr>
<td>
Aadhar
</td>

<td>
<?php echo $p['aadhar'];?>
</td>
</tr>

<tr>
<td>
Incident District
</td>

<td>
<?php echo $p['idistrict'];?>
</td>
</tr>

<tr>
<td>
Police
</td>

<td>
<?php echo $p['police'];?>
</td>
</tr>

<tr>
<td>
Landmark
</td>

<td>
<?php echo $p['landmark'];?>
</td>
</tr>
<tr>
<td>
Complaint District
</td>

<td>
<?php echo $p['cdistrict'];?>
</td>
</tr>

<tr>
<td>
Complaint Police Station
</td>

<td>
<?php echo $p['police2'];?>
</td>
</tr>

<tr>
<td>
Complaint Address
</td>

<td>
<?php echo $p['address'];?>
</td>
</tr>

<tr>
<td>
Complaint Type
</td>

<td>
<?php echo $p['complaint'];?>
</td>
</tr>

<tr>
<td>
Complaint Category
</td>

<td>
<?php echo $p['category'];?>
</td>
</tr>

<tr>
<td>
Mobile IMEI
</td>

<td>
<?php echo $p['mobile'];?>
</td>
</tr>


<tr>
<td>
Vehicle No
</td>

<td>
<?php echo $p['vehicle'];?>
</td>
</tr>

<tr>
<td>
Complaint Description
</td>

<td>
<?php echo $p['description']; ?>
</td>
</tr>



</table>

<br>

<?php

 }
 
 
   }
   
   

?>


</div>
</body>

</html>