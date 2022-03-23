<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <style>
   body{
  font-family:'Montserrat', sans-serif;
  background-image: url('userinfopng.png');
  background-repeat: no-repeat;

}
    .t1{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:600px;
        font-size:2em;
        text-align:center;
        font-family:montserrat;
        height:2em;

    }

    .ta{
        border-radius:10px;
        background: #ecf0f1;
        border:#ccc 1px solid;
        padding:20 px;
        width:1200px;
        font-size:1.6em;
        font-family:montserrat;
        height:20em;

    }

    .btn{
        display:inline-block;
        padding:12px 24px;
        background:#ecf0f1;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
        
		float:left;
		margin-left:300px;
        
    }
    .btn:hover{
        background:#ecf0f1;
        color:black;
    }
	.homebtn{
        display:inline-block;
        padding:12px 24px;
        background:#ecf0f1;
        font-weight:bold;
        color:rgb(120, 120, 120);
        border:none;
        outline:none;
        border-radius:3px;
        cursor:pointer;
        transition:ease .3s;
       
		float:left;
		margin-left:600px;
        
    }
    .homebtn:hover{
        background:#ecf0f1;
        color:black;
    }



   </style>




</head>
<body>

   <div class="container mt-5">
        <form method="POST" action="" enctype="multipart/form-data">
            <center>
            <input type="text" placeholder="Blog Title" class="t1" name="title" >
            <br><br><br>
           
            <textarea name="content" class="ta" cols="150" rows="30"></textarea>
            <br><br>
            <button class="btn" name="new_post">Add Post</button>
			
         <a href="index.php" class="homebtn">Home</a>
		</center>
        </form>
   </div>

   
</body>
</html>
