<?php 
session_start();
error_reporting(0);
?>
<html>
<head>

<title> Divya Abhi  </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="menu_style.css">
<meta name="viewport" content="device-width,initial-scale=1.0">
</head>
<body>
<div class="container">
<header>
<div id="logout">
<a href="logout.php">Logout</a>
</div>
<h2><?php echo "Welcome ". $_SESSION['uname'] ." ".$_SESSION['uname2'];  ?></h2>
</header>

<nav>

<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a>
<ul>
<li> <a href="abtproject.php">Bihar Police</a></li>
<li><a href="#"> Our Team</a></li>

</ul>

</li>
<li><a href="contact.php">Contact</a>
</li>

<li><a href="howitworks.php">How it works</a></li>
<li><a href="login.php">Log in</a></li>
</ul>



</nav>

<div class="quotes">



</div>


<div class="left_side">
<img class="img" src="alcohal.jpg"> </img>
<img class="img" src="alcohal2.jpg"> </img>
<img class="img" src="cityclean1.jpg"> </img>
<img class="img" src="cityclean2.jpg"> </img>
<img class="img" src="water.jpg"> </img>
<img class="img" src="cleanindia.jpg"> </img>
<img class="img" src="dowrt.jpg"> </img>
<img class="img" src="dowry2.jpg"> </img>
<img class="img" src="women.jpg"> </img>
<img class="img" src="women2.jpg"> </img>
</div>


<section>
<marquee >
<img src="m1.jpg" class="marq"></img>
<img src="m2.jpg" class="marq"></img>
<img src="m3.jpg" class="marq"></img>
<img src="m4.jpg" class="marq"></img>
<img src="m5.jpg" class="marq"></img>
</marquee>
<Table align="Center" border="2px"  >


<tr id="tablehead"><td>si.no</td><td>Complaint Type</td><td>Complaint Category</td></tr>
<tr>
<td>
1

</td>
<td>
Communal Violence

</td>


<td>
Communal Violence

</td>


</tr>

<tr>
<td>
2

</td>

<td>
Complaint against Police

</td>

<td>
Refusal to Recive Complaint/FIR

</td>

</tr>

<tr>

<td>

</td>
<td>


</td>
<td>

No Action By Police
</td>
</tr>
<tr>
<td>


</td>
<td >


</td>
<td>
Misbehaviour

</td>

</tr>


<tr>


<td >


</td>

<td >


</td>

<td >

Demand For Doing Favour
</td>

</tr>

<tr>
<td >


</td>

<td >


</td>

<td >

Baised Action
</td>
</tr>

<tr>
<td >
3

</td>

<td >

Excise Related
</td>

<td >

Liqour Manufacturing
</td>

</tr>

<tr>
<td >


</td>

<td >


</td>
<td >
Liqour Possession

</td>
</tr>

<tr>
<td >


</td>

<td >


</td>

<td >

Liqour Sale
</td>
</tr>
<tr>
<td >


</td>
<td >


</td>
<td>
Liqour Transportation
</td>

</tr>

<tr>
<td >


</td>
<td >


</td>
<td >

Liqour Use
</td>

</tr>

<tr>
<td >

4
</td>
<td >

Naxal Related Problems
</td>

<td >
Naxal Related Problems

</td>
</tr>

<tr>
<td >
5

</td>
<td >

Offense Against Body
</td>
<td >

Assault
</td>
</tr>
<tr>
<td >


</td>
<td >


</td>
<td >

Criminal Intimidation
</td>
</tr>

<tr>
<td >


</td>
<td >


</td>
<td >
Defamation

</td>
</tr>
<tr>
<td >


</td>
<td >


</td>
<td >

Rape
</td>
</tr>
<tr>
<td >


</td>
<td >


</td>
<td >

Muder
</td>
</tr>
 <tr>
 
 <td >


</td>
<td >


</td>
<td >

Kidnapping
</td>
 </tr>
<tr>
<td >
6

</td>
<td >
Miscllaneous

</td>
<td >

Nuisance in Public Place
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >
Suspicious Object

</td>
</tr>

<tr>

<td >


</td>

<td >


</td>

<td >

Suspicious Person
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >
Mobile Theft

</td>
</tr>

<tr>

<td >


</td>

<td >


</td>

<td >
Vehicle Theft

</td>
</tr>
<tr>

<td >
7

</td>

<td >
Offense against Property

</td>

<td >
Criminal Intimidation

</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >
Pick Poketing

</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Theft
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Robbery
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Dacoits
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Extortion
</td>
</tr>

<tr>

<td >


</td>

<td >


</td>

<td >
Criminal Breach of Trust

</td>
</tr>

<tr>

<td >


</td>

<td >


</td>

<td >

Cheating
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Mischief
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >
Criminal Tresspass

</td>
</tr>

<tr>

<td >
8

</td>

<td >
Traffic Violations

</td>

<td >
Biased Action

</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Hit and Run by Vehicle
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Irregular Parking
</td>
</tr>

<tr>

<td >


</td>

<td >


</td>

<td >

Wrong Side Driving
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

No Action by Police
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Refusal to Recive Complaints/FIR
</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >
Misbehaviour

</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Demand for Doing Favour
</td>
</tr>
<tr>

<td >
9

</td>

<td >
Women Attrocity

</td>

<td >
Domestic Violence

</td>
</tr>
<tr>

<td >


</td>

<td >


</td>

<td >

Eve Teasing
</td>
</tr>


</table>
<div id="link"><h2> <a href="registrationform.php " >Click here to Register Complaint</a> </h2></div>
</section>

<div class="right_side">
<form id="view" action="view.php" method="post">
<table id="viewtable">
<th colspan="2"align="center"> Status of your Complaint</th>
<tr> 
<td class="lable">Enter your phone No</td><td> <input type="text" name="mobile" placeholder="Enter phone no" id="phone"> </input></td>
</tr>
<tr>
<td class="lable">
Enter Password</td><td> <input type="psssword" name="password" placeholder="Enter password" id="pass"> </input></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit"name="submit" value="Ok" id="btn"> </input>
</td>
</tr>
</table>
</form>
<br>
<br>

<form id="view" action="policeview.php" method="post">
<table id="viewtable">
<th colspan="2"align="center"> All Complaint (Police work)</th>
<tr> 
<td class="lable">Enter your phone No</td><td> <input type="text" name="mobile" placeholder="Enter phone no" id="phone"> </input></td>
</tr>
<tr>
<td class="lable">
Enter Password</td><td> <input type="psssword" name="password" placeholder="Enter password" id="pass"> </input></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit"name="submit" value="Ok" id="btn"> </input>
</td>
</tr>
</table>
</form>

</div>

<footer>

<div class="foot_bottom">
<h2>Copyright &copy;  Abhishek Sinha   (2019)</h2>
</div>

</footer>

</div>

</body>

</html>