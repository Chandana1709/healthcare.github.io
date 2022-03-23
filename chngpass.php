 <?php
$conn=new mysqli("localhost","root","","healthsystem");
	    if($conn->connect_error)
		die("connection failed".$conn->connect_error);
        else
        echo " ";
$userid=$_GET['GetId'];
$query="select * from register where userid='".$userid."'";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
	$userid=$row['userid'];
}



    if(isset($_POST['submit']))
    {
      $userid=$_POST['userid'];
	  $query="SELECT * FROM register where userid='$userid'";
      $query_run=mysqli_query($conn,$query);

	}

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title></title>
  <link rel="stylesheet" href="up.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  .loader-container{
  width:100%;
  height:100vh;
  background-color:black;
  position:fixed;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:1;
}
.loader{
  width:50px;
  height:50px;
  border:5px solid;
  color:#3498db;
  border-radius:50%;
  border-top-color:transparent;
  animation:loader 1.2s linear;

}
@keyframes loader{
  25%{
    color:#2ecc71;
  }
  50%{
    color:#2ecc71;

  }
  to{
    transform:rotate(360deg);
  }
}
body
{
  margin:0;
  padding:0;
  background:url(resetpng.png);
 /* background-image:url;*/
  background-size:cover;
  font-family:sans-serif;
}
     $colors:
  hsla(337, 84, 48, 0.75)
  hsla(160, 50, 48, 0.75)
  hsla(190, 61, 65, 0.75)
  hsla( 41, 82, 52, 0.75);
$size: 2.5em;
$thickness: 0.5em;

// Calculated variables.
$lat: ($size - $thickness) / 2;
$offset: $lat - $thickness;

.loader {
  position: relative;
  width: $size;
  height: $size;
  transform: rotate(165deg);
  
  &:before,
  &:after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    width: $thickness;
    height: $thickness;
    border-radius: $thickness / 2;
    transform: translate(-50%, -50%);
  }
  
  &:before {
    animation: before 2s infinite;
  }
  
  &:after {
    animation: after 2s infinite;
  }
}

@keyframes before {
  0% {
    width: $thickness;
    box-shadow:
      $lat (-$offset) nth($colors, 1),
      (-$lat) $offset nth($colors, 3);
  }
  35% {
    width: $size;
    box-shadow:
      0 (-$offset) nth($colors, 1),
      0   $offset  nth($colors, 3);
  }
  70% {
    width: $thickness;
    box-shadow:
      (-$lat) (-$offset) nth($colors, 1),
      $lat $offset nth($colors, 3);
  }
  100% {
    box-shadow:
      $lat (-$offset) nth($colors, 1),
      (-$lat) $offset nth($colors, 3);
  }
}

@keyframes after {
  0% {
    height: $thickness;
    box-shadow:
      $offset $lat nth($colors, 2),
      (-$offset) (-$lat) nth($colors, 4);
  }
  35% {
    height: $size;
    box-shadow:
        $offset  0 nth($colors, 2),
      (-$offset) 0 nth($colors, 4);
  }
  70% {
    height: $thickness;
    box-shadow:
      $offset (-$lat) nth($colors, 2),
      (-$offset) $lat nth($colors, 4);
  }
  100% {
    box-shadow:
      $offset $lat nth($colors, 2),
      (-$offset) (-$lat) nth($colors, 4);
  }
}



/**
 * Attempt to center the whole thing!
 */

html,
body {
  height: 100%;
}

.loader {
  position: absolute;
  top: calc(50% - #{$size / 2});
  left: calc(50% - #{$size / 2});
}
body {
  background-image:url('myimage..svg');
  background-repeat: no-repeat;
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: antialiased;

}


/*#loding{
  width:100%;
  height:100vh;
  background:#fff
  url('https://loading.io/spinners/progress-pie/lg.percent-circular-preloader-gif.gif')
  no-repeat center;
  z-index:99999;
}*/
.title
{
  text-align:center;
  padding:50px 0 20px;

}
.title h1
{
  margin:0;
  padding:0;
  color:black;
  text-transform:uppercase;
  font-size:35px;
}
.container
{
  width:50%;
  height:400px;
  background:#fff;
  margin:0 auto;
  border:2px solid #fff;
  box-shadow:0 15px 40px rgba(0,0,0,.5);
}
.container .right
{
  float:right;
  height:400px;
    width:50%;
    height:400px;
    box-sizing:border-box;
}
.container .left
{
  float:left;
  width:50%;
  height:400px;
  background:url(reset.jpeg);
  box-sizing:border-box;
 background-size:cover;
}
.formBox
{
  width:100%;
  padding:40px 80px;
  box-sizing:border-box;
  height:400px;
  background:#fff;
}
.formBox p
{
  margin:0;
  padding:0;
  font-weight:bold;
  color:#a6af13;
}
.formBox input
{
  margin-bottom:20px;
}
.formBox input[type="text"],
.formBox input[type="password"]
{
  border:none;
  border-bottom:2px solid #6af13;
  outline:none;
  height:40px;
}
.formBox input[type="text"]:focus,
.formBox input[type="password"]:focus
{
  
  border-bottom:2px solid #262626;
  
}

.formBox input[type="submit"]
{
  border:none;
  outline:none;
  height:40px;
  width:60%;
  color:#ffff;
  background:#262626;
  cursor:pointer;
}
.formBox input[type="submit"]:hover
{
  color: white;
  background: orange;
}
.formBox 
{
  color:#262626;
}
</style>

  <script>
       function checkpassword(form){
	   password = form.password.value;
	   confirmpassword = form.confirmpassword.value;
	   if(password != confirmpassword){
	   alert("Passwords did not match!\nPlease enter same password in both the fields.")
	   return false;
	   }
	   else{
	   return true;
	   }
	}
</script>

  </head>
   
  <body> 
   <div class="loader-container">
    <div class="loader"></div>
  </div>   
  <div class="title"><h1>Change Password</h1></div>
      <div class="container">
        <div class="left"></div>
        <div class="right">
          <div class="formBox">
        <form method="post" action="changep.php" >     
            



        
        
        
            <label for="userid"><b>User-id</b></label>
            <input type="text" id="userid" name="userid" placeholder="Enter userid" value="<?php echo $userid ?>" >
          
		  		 
		  
            <label for="password"><b>Password</b></label>
            <input type="password"  pattern="(?=.*\d)(?=.*[A-Z]).{6,}" title="Must contain atleast one number and one uppercase letter and have atleast 6 or more characters" id="password" name="password" placeholder="Enter New Password" required>			
		
		  
            <label for="Confirm password"><b>Confirm Password</b></label>
            <input type="password" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword" required><br>
          
		  
<input type="submit"  name="submit" value="Submit" class="btn" onclick="return checkpassword(form)";><br>




</form>
 <a href="viewpro.php"><input type="submit" value="Back" class="btn"></a>
 <script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>

</body>
	</html>
	