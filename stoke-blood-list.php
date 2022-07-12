<?php include('connect.php'); session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Stoke Blood List</title> 
<link rel="stylesheet" type="text/css" href="css/s1.css"> 
<style type="text/css"> td{width: 200px;      height: 50px;      color: white;} 
</style> 
</head> 
<body> 
<div id="full"> 
<div id="inner_full"> 
<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div> 
<div id="body"> 
<?php 
$un=$_SESSION['un']; if(!$un){ header("Location:index.php");}   
?> 
<h3>STOKE BLOOD LIST</h3> 
<center><div id="form"> 
<table><tr> 
<td><center><b><font color="black">Name</font></b></center></td> 
<td><center><b><font color="black">Qty</font></b></center></td></tr><tr> 
<td><center>O+</center></td> 
<td><center> 
<?php 
$q=$db->query("SELECT * From donor_registration WHERE bgroup='O+'"); echo $row=$q->rowcount();?> 
</center></td></tr><tr> 	 
<td><center>AB+</center></td><td><center> 
<?php 
$q=$db->query("SELECT * From donor_registration WHERE bgroup='AB+'"); echo $row=$q->rowcount(); ?> 
</center></td></tr><tr> 	 
<td><center>AB-</center></td><td><center> 
<?php 
$q=$db->query("SELECT * From donor_registration WHERE bgroup='AB-'"); echo $row=$q->rowcount(); ?> 
</center></td></tr></table></div></center></div> 
 <div id="footer"><h4 align="center">Copyright@myproject</h4> 
<p align="center"><a href="logout.php"><font color="white">Logout</a></p> 
 </div> </div></div></body></html> 
