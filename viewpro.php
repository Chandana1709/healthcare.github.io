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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title></title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

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





body
{
  
  background-image:url('myimage..svg');
  background-repeat: no-repeat;
  font-family: 'Montserrat', sans-serif;
  -webkit-font-smoothing: antialiased;
}

*
{
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

h5
{
  margin:0px;
  font-size:2.6em;
  font-weight:700;
}
table td
{
  font-size:20px;
}

.center
{
  height:100vh;
  width:100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

/* End Non-Essential  */

.btn1
{
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
position:relative;
margin-left:-0.8px;
}
.btn1:hover
{
  color: white;
  background: orange;
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
  

.property-card
{
 
 height:26em;
  width:26em;
  display:-webkit-box;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-orient:vertical;
  -webkit-box-direction:normal;
  -ms-flex-direction:column;
  flex-direction:column;
  position:relative;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  border-radius:16px;
  overflow:hidden;
  -webkit-box-shadow:  15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
  box-shadow:none;
}

.property-description
{
  background-color: #FAFAFC;
  height:33em;
  width:26em;
  position:absolute;
  top:0em;
  -webkit-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  -o-transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition:all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
  padding: 0.5em 1em;
  text-align:center;
}



</style>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
 </head>
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
      

<div class="center">
  <div class="property-card">
    
   
    <div class="property-description">
      <h5> PROFILE </h5>
	  <br>
	  <center> 
	  <table>
	    <tr>
        <td><b>Name: </b></td>
        <td><b><?php echo $username;?></b></td>
		</tr>
		<tr>
		<td><b>Gender: </b></td>
		<td><b><?php echo $gender;?></b></td>
		</tr>
		<tr>
		<td><b>Height: </b></td>
		<td><b><?php echo $height;?></b></td>
		</tr>
		<tr>
		<td><b>Weight: </b></td>
		<td><b><?php echo $weight;?></b></td>
		</tr>
		<tr>
		<td><b>Blood group: </b></td>
		<td><b><?php echo $blood_group;?></b></td>
	    </tr>
		<tr>
		<td><b>Age: </b></td>
		<td><b><?php echo $age;?></b></td>
    	</tr>
		<tr>
		<td><b>Date of birth: </b></td>
		<td><b><?php echo $dob;?></b></td>
		</tr>
		</table>
		
    </div>
     </center>
	</div>
    </div> 
 
<center>    

<a href="updateprofile.php?GetId=<?php echo $userid ?>">
<button class="btn1">Edit Profile</button>
</a>
 <a href="chngpass.php?GetId=<?php echo $userid ?>">
<button class="btn1">Change Password</button>
</a>
<br><br>
</center> 

<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>



</body>
</html>
