<?php 
session_start();

if(!isset($_SESSION['uname']))
{
	header('location:login.php');
}


?>
<html>
<head>
<title>Online Complaint</title>
</head>
<font size="+12"></font>
<body bgcolor=cyan text=darkblue>
<h1 align=center><u><font size="+6">Online Complaint Registration</font></u></h1>


<form class="form1" action="registration.php" method="post">
<table align="center">
<tr>
<td><td>Select language<td><select name="language" size="1"><option value="Hindi">Hindi</option>
<option value="English" selected >English</option>
</td></tr>
<tr><tr>
<td>Regd. date<td><input type="text" name="regd" value="<?php echo date("d-m-y");?>" readonly></td></tr>

<td>Name<td><input type="text" name="name"value="<?php echo $_SESSION['uname'] ." ".$_SESSION['uname2'];  ?> " readonly> </td></tr>

<td>Gender<td><input type="radio" name="gender" value="Male">Male</td>

<td><td><input type="radio" name="gender" value="Female">Female</td>



<td><td><input type="radio" name="gender" value="Other">Other</td>

<tr>
<td>Contact no.<td><input type="text" name="contact" value=" <?php echo $_SESSION['mobile'];?>" readonly> </td></tr>
<tr>
<td>e-mail<td><input type="text" name="email"></td></tr>
<tr>
<td> Aadhar Number<td><input type="text" name="aadhar"></td></tr></table>
<h2 align=center><u><font size="+6">Location of the incident/Action required</font></u></h1>
<table align="center">

<tr>
<td>District/Area<td><select name="idistrict" size="1">
<option value="-Select-" selected >-Select-</option>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Buxar">Buxar</option>
<option value="Darbhanga">Darbhanga</option>
<option value="East Champaran">East Champaran</option>
<option value="Gaya">Gaya</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Jamui">Jamui</option>
<option value="Jehanabaad">Jehanabaad</option>
<option value="Khagaria">Khagaria</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Kaimur">Kaimur</option>
<option value="Katihar">Katihar</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Madhubani">Madhubani</option>
<option value="Munger">Munger</option>
<option value="Madhepura">Madhepura</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Nawada">Nawada</option>
<option value="Patna">Patna</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>
<option value="Saharsa">Saharsa</option>
<option value="Samastipur">Samastipur</option>
<option value="Sheohar">Sheohar</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Saran">Saran</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Supaul">Supaul</option>
<option value="Siwan">Siwan</option>
<option value="Vaishali">Vaishali</option>
<option value="West Champaran">West Champaran</option>
</select>
</td></tr>


<tr>
<td>Police station<td><input type="text" name="police"></td></tr>

<td>Landmark<td><textarea rows="+6" cols="+35" name="landmark" required></textarea></td></table>
<h2 align=center><u><font size="+6">Complainant Address</font></u></h2>
<table align="center">
<tr>
<td><td><input type="checkbox" name="both" value="both">If both addresses are same</td></tr>


<tr>
<td>District/Area<td><select name="cdistrict" size="1">
<option value="-Select-" selected >-Select-</option>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Buxar">Buxar</option>
<option value="Darbhanga">Darbhanga</option>
<option value="East Champaran">East Champaran</option>
<option value="Gaya">Gaya</option>
<option value="Gopalganj">Gopalganj</option>
<option value="Jamui">Jamui</option>
<option value="Jehanabaad">Jehanabaad</option>
<option value="Khagaria">Khagaria</option>
<option value="Kishanganj">Kishanganj</option>
<option value="Kaimur">Kaimur</option>
<option value="Katihar">Katihar</option>
<option value="Lakhisarai">Lakhisarai</option>
<option value="Madhubani">Madhubani</option>
<option value="Munger">Munger</option>
<option value="Madhepura">Madhepura</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Nawada">Nawada</option>
<option value="Patna">Patna</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>
<option value="Saharsa">Saharsa</option>
<option value="Samastipur">Samastipur</option>
<option value="Sheohar">Sheohar</option>
<option value="Sheikhpura">Sheikhpura</option>
<option value="Saran">Saran</option>
<option value="Sitamarhi">Sitamarhi</option>
<option value="Supaul">Supaul</option>
<option value="Siwan">Siwan</option>
<option value="Vaishali">Vaishali</option>
<option value="West Champaran">West Champaran</option>
</select>
</td></tr>



<tr>
<td>Police station<td><input type="text" name="police2"></td></tr>

<td>Address<td><textarea rows="+6" cols="+35" name="address"></textarea></td></tr>


<tr>
<td>Complaint Type<td><select name="complaint" size="1" required>
<option value="-Select-"  >-Select-</option>
<option value="Communal Violence">Communal Violence</option>
<option value="Women Attrocity">Women Attrocity</option>
<option value="Offense Against Body">Offense Against Body</option>
<option value="Offense Against Property">Offense Against Body</option>
<option value="Complaints Against Police">Complaints Against Police</option>
<option value="Naxal Related Problems">Naxal Related Problems</option>
<option value="Traffic Violations">Traffic Violations</option>
<option value="Excise Related">Excise Related</option>
<option value="Miscellaneous Crimes">Miscellaneous Crimes</option></td></tr>
</select>
<tr>
<td>Complaint Category</td><td><select name="category" size="+1" required> 
<option value="-Select-" >-Select-</option>
<option value="Communal Violence">Communal Violence</option>
<option value="stolen1">If mobile phone is stolen</option>
<option value="stolen2">If bike is stolen</option>
<option value="stolen3">If car is stolen</option>
<option value="stolen4">If any other vehicle is stolen</option>
<option value="Biased Action">Biased Action</option>
<option value="Demand for doing favour">Demand for doing favour</option>
<option value="Misbehaviour">Misbehaviour</option>
<option value="No action by Police">No action by Police</option>
<option value="Refusal to Receive Complaints/FIR">Refusal to Receive Complaints</option>
<option value="Liquor Manufacturing">Liquor Manufacturing</option>
<option value="Liquor Transportation">Liquor Transportation</option>
<option value="Liquor Sale">Liquor Sale</option>
<option value="Liquor Possession">Liquor Possession</option>
<option value="Liquor Use">Liquor Use</option>
<option value="Nuisance in Public place">Nuisance in Public place</option>
<option value="Suspicious objects">Suspicious objects</option>
<option value="Suspicious person">Suspicious person</option>
<option value="Naxal related problems">Naxal related problems</option>
<option value="Assault">Assault</option>
<option value="Criminal intimidation">Criminal intimidation</option>
<option value="Defamation">Defamation</option>
<option value="Rape">Rape</option>
<option value="Murder">Murder</option>
<option value="Kidnapping">Kidnapping</option>
<option value="Kidnapping for compelling for marriage">Kidnapping for compelling for marriage</option>
<option value="Kidnapping for murder">Kidnapping for murder</option>
<option value="Kidnapping for ransome">Kidnapping for ransome</option>
</tr>
<tr><td>If MOBILE PHONE is lost, please enter IMEI</td><td><input type="text" name="mobile"></tr>
<tr><td>If VEHICLE is lost, please enter Vehicle no.</td><td><input type="text" name="vehicle"</td></tr>
<tr>

<td>Enter complaint description in brief<td><textarea rows="+5" cols="35" name="description" required></textarea></tr>

<tr>
<td><input type="checkbox" name="declaration" value="declaration">Keep my personal information confidential</td></tr>
<tr>
<td><input type="Submit" name="submit" value="Submit" id="btn"></input>
<input type="reset"></input></td>
</tr>
</table>
</form>
</body>
</html>




