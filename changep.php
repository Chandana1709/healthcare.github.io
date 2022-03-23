  <?php
  $conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
else
 echo" ";

      $userid=$_POST['userid'];
      $query="SELECT * FROM register where userid='$userid'";
      $query_run=mysqli_query($conn,$query);
	  $row=mysqli_fetch_array($query_run);
  ?>





<?php
      
        $password = $_POST['password'];
        

      $userid=$_REQUEST["userid"];
	$sql="SELECT * FROM register WHERE userid='$userid'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["userid"] == $userid){
   
		
		 $sql = "UPDATE register SET password='$password'
	                                 where userid='$userid'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Password updated successfully!')</script>";
                  echo "<script>location.replace('viewpro.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect. Please try again')</script>";
        echo "<script>location.replace('viewpro.php')</script>";
		
}
?>


      
	  
                     
      