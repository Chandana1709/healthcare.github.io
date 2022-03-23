<?php
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
  die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM register WHERE userid='$userid'";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0)
{
  while($row = mysqli_fetch_assoc($result))
  {

$userid=$row['userid'];
$password=$row['password'];
$username=$row['username'];
$gender=$row['gender'];
$height=$row['height'];
$weight=$row['weight'];
$blood_group=$row['blood_group'];
$age=$row['age'];
$dob=$row['dob'];
  }
  
}
    
?>

<!DOCTYPE html>
<html>
<head>

 <title></title>
 
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <style>
  *{
margin: 0; padding: 0;
box-sizing: border-box;

}

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
  font-family: 'Montserrat', sans-serif;
}

.loader {
  position: absolute;
  top: calc(50% - #{$size / 2});
  left: calc(50% - #{$size / 2});
}

header{
 width: 100%;
 height: 100vh;
 background-image: url('myimage..svg');
 background-repeat: no-repeat;
 background-size: 100% 100%;

}

.mainheader{
 width: 100%;
 height: 100px;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

.mainheader .logo img{
 width: 250px; height: 150px;
 padding-left: 60px;
}

.mainheader nav{
 width: 1000px;
 display: flex;
 justify-content: space-around;
 align-items: center;
}

.mainheader nav a{
 text-decoration: none;
 color: black;
 text-transform: uppercase;
  }
.menubtn{
 margin-right: 60px;
}
.mainheader button{
 padding: 10px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
 border-radius: 10px;
}


main{
 width: 100%;
 display: flex;
 justify-content: space-between;
 align-items: center;
}

main .right-sec{
 padding-right: 70px;
}

main .left-sec{
 padding-left: 100px;
}

.left-sec h2{
 font-size: 20px;
 text-transform: capitalize;
 font-weight: lighter;
 color: #242424;
 margin-top: 100px;
}

.left-sec h1{
 font-size: 50px;
 text-transform: capitalize;
 font-weight: 700;
 margin: 15px 0;
}

.left-sec p{
 margin-bottom: 20px;
}

.left-sec button{
 padding: 15px 45px;
 text-align: center;
 font-size: 14px;
 color: #fff;
 border: none;
 background-image: linear-gradient(to right,#649bff,#0070fa,#649bff);
 border-radius: 10px;
}


</style>
</head>
<body>
  <div class="loader-container">
    <div class="loader"></div>
  </div>
<header>
 <div class="mainheader">
  <div class="logo">
  <img src="logo.png">
  </div>

  <nav class="nav">
    <b><li><a class="active" href="userdash.php">Home</a></li></b>
   <b><a href="viewpro.php">Profile</a></b>
   <b><a href="upb.php">Blood Pressure</a></b>
   <b><a href="upd.php">Diabetes</a></b>
   <b><a href="history.html">History</a></b>
   <b><a href="userview.php">Blog</a></b>
   <b><a href="query.php">Contact Us</a></b>
    <b><a href="feedback.php">Feedback</a></b>
   <b><a href="logout.php">Logout</a></b>
  </nav>
  
   
  
 </div>
<br><br>
 <h1>Welcome <?php echo $username;?></h1>


 <main>
 
  <section class="left-sec">
   <h1>Diabetes and Blood Pressure!</h1>
  <b><p> We Are Here For Your Care<p></b>

  
  </section>

  <section class="right-sec">
   <figure>
    <img src="pnguser.png">
   </figure>
  </section>
 </main>
</header>
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>

</body>
</html>



