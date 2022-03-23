<?php
/*
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo"<br>connection successfull";
$sql="CREATE TABLE register(
      
	userid VARCHAR(15) PRIMARY KEY,
    password VARCHAR(10) NOT NULL,
    username VARCHAR(30) NOT NULL,
	gender VARCHAR(15) NOT NULL,
	height FLOAT(5) NOT NULL,
	weight INT(5) NOT NULL,
	blood_group VARCHAR(10) NOT NULL,
	age INT(3) NOT NULL,
	dob VARCHAR(10) NOT NULL,
	security_qstn VARCHAR(30) NOT NULL
		
	)";
if(mysqli_query($conn,$sql))
	echo"<br>table created";
else
	echo"<br>Could not create the table".mysqli_error($conn);
mysqli_close($conn);
*/

$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
$userid=$_POST['userid'];
$password=$_POST['password'];
$username=$_POST['username'];
$gender=$_POST['gender'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$blood_group=$_POST['blood_group'];
$age=$_POST['age'];
$dob=$_POST['dob'];
$security_qstn=$_POST['security_qstn'];

$sql = "INSERT INTO register
                (userid,password,username,gender,height,weight,blood_group,age,dob,security_qstn)
                VALUES ('".$userid."','".$password."','".$username."','".$gender."','".$height."','".$weight."','".$blood_group."','".$age."','".$dob."','".$security_qstn."')"; 
if (mysqli_query($conn,$sql))
	echo  "<script>alert('Registration successfull!')</script>";
    echo "<script>location.replace('login.html')</script>";

	?>
 