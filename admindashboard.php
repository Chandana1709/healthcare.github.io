<?php
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM admin WHERE userid='$userid'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{

$userid=$row['userid'];
$password=$row['password'];
    }
	
}
		
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <style>
  *{margin :0;padding:0;box-sizing:border-box;font-family: 'Montserrat', sans-serif;}


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

.site-headers{
  width:100%;
  height:100vh;
   background-image:url("userinfopng.png");
 
}

nav{
  width:100%;height:100px;background:none;display:flex;
}
nav ul li a
{
  display:block;
  margin:10px 0;
  padding:10px 20px;
  text-decoration:none;
  color:black;
}
nav ul li a.active,
nav ul li a:hover
{
  background:#FFAE19;
  color:#ffffff;
  transition:0.5s;
}

.logo{width:55%;height:100px;}

.logo h1{line-height:100px;padding-left:50px;}

.menu{
  width:100%;
  height:90px;
}
.menu ul{ width:100%;height:100px;display:flex;flex-direction:row;
justify-content:space-around;align-items:center; }
.menu ul li{
  list-style:none;font-size:12px;
  font-weight:bold;text-transform:uppercase;
}
section{display:flex;}
.leftside{width:45%;height:auto;

overflow:hidden;margin-top:20px;}
.leftside img{width:600px;height:500px;}

.rightside{width:55%;height:300px;color:white;text-align:center;margin-top:80px;padding:40px;}

.rightside h1{
  font-size:50px;font-weight:900;text-transform:uppercase;
}
.rightside p{font-size:1.5rem;padding:30px 0;}
.rightside button{font-size:17px;font-weight:bold;color:white;text-transform:uppercase;background:linear-gradient(57deg,#00c6a7,#1e4d92);border-radius:4px;padding:20px 35px;}
.rightside button:hover{
  background:linear-gradient(57deg,#1e4d92,#00c6a7);

}
</style>

 </head>
<body>
 <div class="loader-container">
    <div class="loader"></div>
  </div> 
  <header class="site-headers">
    <nav>
      <div class="logo">
       	<h1><?php echo $userid;?></h1>
		
      </div>
      <div class="menu">
      <ul>

 <li><a class="active" href="admindashboard.php">Home</a></li>
  <li><a href="userinfo.php">Registered Users</a></li>
  <li><a href="totalreports.html">Number of reports</a></li>
  <li><a href="index.php">Blog</a></li>
  <li><a href="contactus.php">Queries</a></li>
  <li><a href="viewfeed.php">User Feedback</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
</div>
</nav>
<section>
  <div class="leftside">
    <img src="adpng.png">
  </div>
  
   

</section>
</header>
 <script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>
</body>
</html>
 