<!DOCTYPE html>
<html>
<head>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');
*{
 margin:0;
 padding: 0;
 outline: 0;
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
}

.loader {
  position: absolute;
  top: calc(50% - #{$size / 2});
  left: calc(50% - #{$size / 2});
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



body{
  background-image:url("userinfopng.png");
  font-family: 'Montserrat', sans-serif;
   background-repeat:no-repeat;
   }
.filter{
 position: absolute;
 left: 0;
 top: 0;
 bottom: 0;
 right: 0;
 z-index: 1;
 background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
opacity: .7;
}
table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 30%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color:#FFAE19;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
h1{
  text-align:center;
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
position:absolute;
margin-left:-50px;
left:50%;
bottom:40px;

} 

button:hover {
  background: #FFAE19;
  color:#ffffff;
} 



</style>
<body>
  <div class="loader-container">
    <div class="loader"></div>
  </div>
  <nav>
      </div>
      <div class="menu">
      <ul>

 <li><a  href="admindashboard.php">Home</a></li>
  <li><a href="userinfo.php">Registered Users</a></li>
  <li><a href="totalreports.html">Number of reports</a></li>
  <li><a href="index.php">Blog</a></li>
  <li><a class="active"  href="contactus.php">Queries</a></li>
  <li><a href="viewfeed.php">User Feedback</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>
</div>
</nav>

<center>
<br><br>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

</head>


<table class="content-table">
  <thead>
<tr>
<th>User-id</th>
<th>Question 1</th>
<th>Question 2</th>
<th>Question 3</th>
<th>Aditional Query</th>
</tr>
</thead>








   

<?php
$conn = mysqli_connect("localhost", "root", "", "healthsystem");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT userid, q1, q2 , q3 , subquery FROM query";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["userid"]. "</td><td>" . $row["q1"] . "</td><td>" . $row["q2"] . "</td><td>" . $row["q3"] . "</td><td>" . $row["subquery"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>



</table>
</center>
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>
</body>
</html>
