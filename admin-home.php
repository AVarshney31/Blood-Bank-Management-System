<?php include('connect.php'); session_start(); ?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Admin Login</title> 
<link rel="stylesheet" type="text/css" href="css/s1.css"> 
</head> 
<body> 
<div id="full"> 
<div id="inner_full"> 
<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div> 
 <div id="body"><br> 
<?php 
$un=$_SESSION['un']; 
if(!$un){   header("Location:index.php");}  
?> 
<h1>WELCOME ADMIN</h1><br><br> 
<center><ul> 
 <li><a href="donor-reg.php">Donor Registration</a></li> 
<li><a href="donor-list.php">Donor List</a></li> 
<li><a href="stoke-blood-list.php">Stoke Blood list</a></li> 
</ul><br><br><br><br><br><ul> 	 	 	 	 
<li><a href="out-stoke-blood-list.php">Out Stoke Blood List</a></li> 
<li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li> 
<li><a href="exchange-blood-list1.php">Exchange Blood List</a></li> 
</ul></center></div> 
<div id="footer"><h4 align="center">Copyright@myproject</h4> 
<p align="center"><a href="logout.php"><font color="white">Logout</a></p> 
 </div> </div></div></body> 
</html> 
