<?php
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM bloodsugar WHERE userid='$userid'";
?>

<!DOCTYPE html>
<html>
<head>

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
}



form {
  width: 20%;
  margin: 25px auto;
  background: #efefef;
  padding: 30px 50px 30px 50px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  float:center;
}
label {
  display: block;
  position: relative;
  margin: 20px 0px;
}
h2{
  font-size:16px;
  font-weight:bold;
  text-align:center;
  margin:margin-top:0.67em;
  margin-bottom:0.67em;
margin-left:0;
margin-right:0;
color:black;
}

.label-txt {
  position: absolute;
  top: -1.1em;
  padding: 3px;
  font-size: .6em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}


.input {
  width: 80%;
  padding: 5px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 80%;
  height: 1px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 1px;
  top: 0px;
  left: 40%;
  transform: translateX(-50%);
  background:#add8e6;
  transition: ease .6s;
} 

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
} 
.nav{
 width: 1000px;
 display: flex;
 justify-content: space-around;
 align-items: center;
 width: 100%;
 height: 100px;
 display: flex;
 
}

.nav a{
 text-decoration: none;
 color: black;
 text-transform: uppercase;

}

button:hover {
  color: white;
  background: orange;
} 
/* 
button:disabled {
  cursor: not-allowed;
  pointer-events: all !important;
} */

  </style>
</head>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>


<body>
	
 <div class="loader-container">
    <div class="loader"></div>
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

<form action="mead.php" method="POST" style="text-align:center;">

<h2>User-Id</h2>
 <input type="text" class="input" placeholder="Enter userid" value="<?php echo $userid;?>"  name="userid"><br><br>
	<div class="line-box">
            <div class="line"></div>
   </div>
   
	<div>
    <h2>BLOOD SUGAR LEVEL</h2>
    <br>
      <label for="before_food"><b>Blood Sugar Level(Before food) (mg/dL):</b></label>
      <input type="text" class="input" placeholder="Enter the value"  name="before_food" pattern="^\d{1,3}$" title="Please enter the valid value." required>
	  <br>
	  <div class="line-box">
            <div class="line"></div>
   </div>
	  <label for="after_food"><br><b>Blood Sugar Level(After food) (mg/dL):</b></label>
      <input type="text" class="input" placeholder="Enter the value"  name="after_food" pattern="^\d{1,3}$" title="Please enter the valid value." required>
    <div class="line-box">
            <div class="line"></div>
   </div>
	</div>
    <br>
     <div>
      <h2>Body Temperature(Fahrenheit)</h2>
      
      <input type="text" class="input" placeholder="Enter temperature"  name="temperature" required>
    <div class="line-box">
            <div class="line"></div>
   </div>
	</div>
    <br>
    <div>
      <button class="button" type="submit">SUBMIT</button>
	   </div>
       </div>
	   </form>
	
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>

	   
  </body>
  </html>
 
 