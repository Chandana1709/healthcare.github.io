<?php
$conn=new mysqli("localhost","root","","healthsystem");
if($conn->connect_error)
	die("connection failed".$conn->connect_error);
 else
     echo" ";
session_start();
$userid = $_SESSION['userid'];
$sql = "SELECT * FROM bloodpressure WHERE userid='$userid'";
?>



<html>
<head>
<style>
body{
  margin:0;
  padding :0;
  font-family:'Montserrat', sans-serif;
  text-align: center;
  background-image:url("userinfopng.png");
}
table  {
background-color: 1px solid #ddd;
color: black;
font-family: 'Montserrat', sans-serif;
font-size: 20px;
text-align: left;
border: 1px solid black;
width: 1100px;
}
tr:nth-child(even) {background-color: #f2f2f2;}

.btn1{
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
.btn{
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
margin-left:-0.5px;
} 
.btn:hover {
  background: #FFAE19;
  color:#ffffff;
} 

.btn1:hover {
  background: #FFAE19;
  color:#ffffff;
} 


.un{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}



</style>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

<body>
<center>
   <h1>View History</h1>
<div class="container">
<form action="" method="POST">
<input type="text" name="userid" class="un" placeholder="Enter your Userid" value="<?php echo $userid;?>">
<input type="submit" name="submit" class="btn" value="View History">
</form>
<table>
    <tr>
          
          <th>BLOOD PRESSURE RANGE (mmHg)</th>
          <th>BODY TEMPERATURE(Fahrenheit)</th>
		  <th>DATE</th>
		  
		  
		  
		  
	</tr><br>
	
	<?php
        $conn=new mysqli("localhost","root","","healthsystem");
	    if($conn->connect_error)
		die("connection failed".$conn->connect_error);
        else
        echo " ";

 
    if(isset($_POST['submit']))
     {	 
      $userid=$_POST['userid'];
	  $query="SELECT * FROM bloodpressure where userid='$userid'";
      $query_run=mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($query_run))
{
?>
<tr>
    
	
    <td> <?php echo $row['blood_pressure_report_value']; ?> </td>
    <td> <?php echo $row['temperature']; ?> </td> 
	<td> <?php echo $row['reg_date']; ?> </td>
	
	
</tr>


<?php
	}
	}
	?>
	</table>

<a href="history.html">
<button class="btn1">Back</button></a></p>
</div>
</center>
</body>
</html>		