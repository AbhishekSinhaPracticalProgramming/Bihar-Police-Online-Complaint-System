
<?php
error_reporting(0);
$mobile= $_POST['mobile'];
$password= $_POST['password'];

$con=mysqli_connect('localhost','root','','complain_sign_in');

$query="SELECT password FROM `$mobile`";


$run2=mysqli_query($con,$query);
$p=mysqli_fetch_assoc($run2);


?>

	


<?php
if( $p['password']== $password )
{
header("location:index.php");

	echo "Sucessfully1" ;
	}
else{
	?>
	<script type="text/javascript"  language="javascript">
alert("Invalid mobile number or password");
</script>
	<?php
	echo "<span style='color:red'>error!Invalid mobile number or password . </span>";
}
?>
	

