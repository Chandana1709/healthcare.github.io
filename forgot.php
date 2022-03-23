  <?php
  $conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo" ";

      $userid=$_POST['userid'];
	  $security_qstn=$_POST['security_qstn'];
      $query="SELECT * FROM register where userid='$userid' AND security_qstn='$security_qstn'";
      $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_array($query_run);
  ?>





<?php
      
        $password = $_POST['password'];
        

      $userid=$_REQUEST["userid"];
      $security_qstn=$_POST['security_qstn'];	
	$sql="SELECT * FROM register WHERE userid='$userid' AND security_qstn='$security_qstn';";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["userid"] == $userid){
   
		
		 $sql = "UPDATE register SET password='$password'
	                                 where userid='$userid'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Password reset is successfull!')</script>";
                  echo "<script>location.replace('login.html')</script>";
	}
    	
else{
		echo  "<script>alert('Your Userid or security answer is incorrect! Please try again.')</script>";
        echo "<script>location.replace('forgotpass.php')</script>";
		
}
?>


      
	  
                     
      