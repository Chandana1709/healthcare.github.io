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
	$username=$row['username'];
    $gender=$row['gender'];
	$height=$row['height'];
	$weight=$row['weight'];
	$blood_group=$row['blood_group'];
	$age=$row['age'];
	$dob=$row['dob'];
}

?>
	
 


<!DOCTYPE html>
<html lang="en-US">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  -webkit-font-smoothing: antialiased;

}



form {
  width: 20%;
  margin: 25px auto;
  background: #efefef;
  padding: 30px 50px 30px 50px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);

}


label {
  display: block;
  position: relative;
  margin: 20px 0px;
}

.label-txt {
  position: absolute;
  top: -1.1em;
  padding: 3px;
  font-family: sans-serif;
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
  background: #FFC922;
  transition: ease .6s;
} 

.input:focus + .line-box .line {
  width: 80%;
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
   <body>
     <div class="loader-container">
    <div class="loader"></div>
  </div>
   <div>
      
        <form method="post" action="updatepro.php" >
          <h4 class="text-warning text-center pt-5"> Edit Profile</h4>
         <label>   
		  
           
            <input type="text" class="input" name="userid"  placeholder="Enter UserId" value="<?php echo $userid ?>"/>
             <div class="line-box">
            <div class="line"></div>
          </div>
		  </label>
		  
		    <label>
            
            <input type="text" class="input" name="username"  placeholder="Enter your Fullname" value="<?php echo $username ?>"/>
            <div class="line-box">
            <div class="line"></div>
          </div>
		  </label>
          
            <label>
            <input type="text" class="input" name="gender"  placeholder="Enter your Gender" value="<?php echo $gender ?>"/> 
             <div class="line-box">
            <div class="line"></div>         
			</div>
    </label>			
			<label>
            
            <input type="text" class="input" name="height"placeholder="Enter your Height(feet)" value="<?php echo  $height ?>"/>
            <div class="line-box">
            <div class="line"></div>     
          </div>
		  </label>
        <label>
            
            <input type="text"   class="input" name="weight" placeholder="Enter your Weight" value="<?php echo $weight ?>"/>
             <div class="line-box">
            <div class="line"></div> 
          </div>
		  </label>
		  <label>
          
            <input type="text"   class="input" name="blood_group"  placeholder="Enter your Blood group"  value="<?php echo $blood_group ?>"/>
            <div class="line-box">
            <div class="line"></div> 
          </div>
		  </label>
         <label>
            
            <input type="text" class="input"  name="age"  placeholder="Enter your Age" value="<?php echo $age ?>"/>
            <div class="line-box">
            <div class="line"></div>
          </div>
		  </label>
		  <label>
            
            <input type="text" class="input" name="dob" placeholder="dd/mm/yy"  value="<?php echo $dob ?>"/>
            <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
           <label>
            <button  type="submit" name="submit" value="Update">Update</button>
			
          
		 </form>
      </div>
	  <center>
	  <a href="viewpro.php">
      <button type="submit" name="submit" value="Back">Back</button>
      </a>
      </center>
<script>
          $(window).on("load",function(){
              $(".loader-container").fadeOut(1000);
          });
        </script>

	  </body>
	  </html>
