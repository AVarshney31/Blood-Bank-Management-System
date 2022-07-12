<?php include('connect.php'); session_start(); 
?> 
<!DOCTYPE html> 
<html> 
<head> 
 <title>Exchange Blood Donor Registration</title> 
 <link rel="stylesheet" type="text/css" href="css/s1.css"> 
</head> 
<body> 
<div id="full"> 
<div id="inner_full"> 
<div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none;color: white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div> 
<div id="body"> 
<?php 
$un=$_SESSION['un'];  if(!$un){ 
header("Location:index.php");  }  ?> 
<h3>EXCHANGE BLOOD DONOR REGISTRATION</h3> 
<center><div id="form"> 
<form action="" method="post"><table><tr> 
<td width="200px" height="50px">Enter Name</td><td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td> 
<td width="200px" height="50px">Enter Father's Name</td><td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td></tr><tr> 
<td width="200px" height="50px">Enter Address</td><td width="200px" height="50px"><textarea name="address"></textarea></td> 
<td width="200px" height="50px">Enter City</td><td width="200px" 
height="50px"><input type="text" name="city" placeholder="Enter City"></td></tr><tr> 
<td width="200px" height="50px">Enter Age</td><td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td> 
<td width="200px" height="50px">Enter E-Mail</td><td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td></tr> 
<tr><td width="200px" height="50px">Enter Mobile No</td><td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td></tr> 
<tr><td width="200px" height="50px">Select Blood Group</td><td width="200px" height="50px"><select name="bgroup"> 
<option>o+</option><option>AB+</option><option>AB-</option></select></td> 
<td width="200px" height="50px">Exchange Blood Group</td><td width="200px" height="50px"><select name="exbgroup"> 
<option>o+</option><option>AB+</option><option>AB-</option></select> </td></tr><tr> 
<td><input type="submit" name="sub" value="Save"></td></tr>  
</table></form> 	 	 
 <?php 
if(isset($_POST['sub'])) {//fornt end data input 
$name=$_POST['name']; 
$fname=$_POST['fname']; 
$address=$_POST['address']; 
$city=$_POST['city']; 
$age=$_POST['age']; 
$bgroup=$_POST['bgroup']; 
$mno=$_POST['mno']; 
$email=$_POST['email']; 
$exbgroup=$_POST['exbgroup'];  //fornt end data input end 
//select and insert 
$q="select * from donor_registration where bgroup='$bgroup'"; 
$st=$db->query($q); 
$num_row=$st->fetch(); 
$id=$num_row['id']; 
$name=$num_row['name']; 
$b1=$num_row['bgroup']; 
$mno=$num_row['mno']; 
$q1="INSERT INTO out_stoke_b (bname,name,mno) value(?,?,?)"; 
$st1=$db->prepare($q1); 
$st1->execute([$b1,$name,$mno]);//select and insert end 
//delete code 
$q2="delete from donor registration where id='$id'"; 
$st1=$db->prepare($q2); 
$st1->execute();//delete code end 
//exchange info insert 
$q=$db>prepare("INSERTINTOexchange_b(name,fname,address,city,age,bgroup,mno,email
,ebgroup)VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email,:ebgroup)"); 
$q->bindvalue('name',$name); 
$q->bindvalue('fname',$fname); 
$q->bindvalue('address',$address); 
$q->bindvalue('city',$city); 
$q->bindvalue('age',$age); 
$q->bindvalue('bgroup',$bgroup); 
$q->bindvalue('mno',$mno); 
$q->bindvalue('email',$email); $q->bindvalue('ebgroup',$exbgroup); if($q->execute()){ 
echo "<script>alert('Registration Successful')</script>";} else{ 
echo "<script>alert('Registration Fail')</script>"; } //exchange info insert end } ?> 
</div></center></div> 
 <div id="footer"><h4 align="center">Copyright@myproject</h4> 
<p align="center"><a href="logout.php"><font color="white">Logout</a></p> 
 </div> </div></div></body></html> 
