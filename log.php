<?php
 
          $conn=new mysqli("localhost","root","","healthsystem");
         if($conn->connect_error)
	     die("connection failed".$conn->connect_error);
         else
         echo" ";
	  
	     
		 
		 $userid = $_POST['userid'];
		 $password = $_POST['password'];
         
		 $sql = "SELECT * FROM register WHERE userid='$userid' AND password='$password'";
		 $result = mysqli_query($conn , $sql);
		 if(mysqli_num_rows($result) > 0)
		 {
			    while($row = mysqli_fetch_assoc($result))
				{
                      
                      $userid = $row["userid"];
                      session_start();
					 
                      $_SESSION['userid'] = $userid;
				}
                  header("Location: userdash.php");
		 }
         else
         {
          echo  "<script>alert('Invalid userid or password !')</script>";
		  echo  "<script>location.replace('login.html')</script>";
         

	     }

 ?>
