<?php 
/*
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo"<br>connection successfull";
$sql="CREATE TABLE feedback(
    
	userid VARCHAR(15) NOT NULL,
    feedback TINYTEXT NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY(userid) references register(userid)
	)";

if(mysqli_query($conn,$sql))
	echo"<br>table created";
else
	echo"Could not create the table".mysqli_error($conn);
   mysqli_close($conn);
*/


$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
 $userid=$_REQUEST["userid"];
	$sql="SELECT * FROM register WHERE userid='$userid'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["userid"] == $userid){
   $sql="INSERT INTO feedback(userid,feedback) values('".$_POST["userid"]."','".$_POST["feedback"]."')";
	
if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Feedback submitted successfully!')</script>";
                  echo "<script>location.replace('feedback.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect! Please try again')</script>";
		echo "<script>location.replace('feedback.php')</script>";
		
}

?>
