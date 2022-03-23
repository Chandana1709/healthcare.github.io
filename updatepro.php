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
      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $gender = $_POST['gender'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
		$blood_group = $_POST['blood_group'];
		$age = $_POST['age'];
		$dob = $_POST['dob'];
		
    $userid=$_REQUEST["userid"];
	$sql="SELECT * FROM register WHERE userid='$userid'";
	$result=mysqli_query($conn,$sql); 
	$row=mysqli_fetch_array($result);
	if($row["userid"] == $userid){
 
      $sql = "UPDATE register SET username='$username',
	                                  gender='$gender',
	                                  height='$height',
									  weight='$weight',
									  blood_group='$blood_group',
									  age='$age',
									  dob='$dob'
	                                  where userid='$userid'";
                  if (mysqli_query($conn,$sql))
	              echo  "<script>alert('Profile updated successfully!')</script>";
                  echo "<script>location.replace('viewpro.php')</script>";
	}
    	
else{
		echo  "<script>alert('Your userid is incorrect. Please try again')</script>";
        echo "<script>location.replace('viewpro.php')</script>";
		
}
?>
	  <?php
	  }
    ?>
                     

                     
      