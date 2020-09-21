<?php
error_reporting(0);
$regd=$_POST['regd'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$idistrict=$_POST['idistrict'];
$police=$_POST['police'];
$landmark=$_POST['landmark'];
$cdistrict=$_POST['cdistrict'];
$police2=$_POST['police2'];
$address=$_POST['address'];
$complaint=$_POST['complaint'];
$category=$_POST['category'];
$mobile=$_POST['mobile'];
$vehicle=$_POST['vehicle'];
$description=$_POST['description'];
$con=mysqli_connect('localhost','root','','registration');

$sqlcheck="select * from `reg`";
$runcheck=mysqli_query($con,$runcheck);
if($runcheck==false)
{
$sql="create table registration.reg(regd text,name text,gender text,contact text,email text,aadhar text,idistrict text,police text,landmark text,cdistrict text,police2 text,address text,complaint text,category text,mobile text,vehicle text,description text);";

$run=mysqli_query($con,$sql);

}
$query="INSERT INTO `reg`(`regd`,`name`,`gender`,`contact`,`email`,`aadhar`,`idistrict`,`police`,`landmark`,`cdistrict`,`police2`,`address`,`complaint`,`category`,`mobile`,`description`)values('$regd','$name','$gender','$contact','$email','$aadhar','$idistrict','$police','$landmark','$cdistrict','$police2','$address','$complaint','$category','$mobile','$description');";

$run=mysqli_query($con,$query);
if ($run==true)
{
	?>
	<body   style="background:linear-gradient(to left,cyan,yellow);">
	<center><img src="gr.png"></center>
<center><p style="color: green">Your details has been successfully recorded !</p></center>
<center><p>We will contact you shortly</p></center>

</body>
<?php
	
	
	
	
}
else
	echo "not";

 ?>