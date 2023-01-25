<?php
include('conect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>messag</title>
</head>
<body>
<style type="text/css">
  	body{
  		margin:0;
  		padding:0;
  	}
  	.message{
  		position:relative;
  		width:100%;
  		padding-bottom:3em;
  		border-radius:12px;
  		box-shadow:0 -1px 3px black ;
  	}
  	.message h5{
  		font-weight:700 ;
  		color:gray;
  	}
  	.message p{
  		color:crimson;
  		font-weight:600 ;
  	}
  	.message span{
  		width:100%;
  		height:20px;		
  	}
  	.message .delet{
  		width:6em;
  		height:3em;
  		background-color:crimson;
  		position:absolute;
  		border-radius:8px ;
  		bottom:5px;
  		left:35%;
  	}
  </style>

                <!--  -->
                <div class="container mt-5 text-center"> 
                <div class="row">
                <h1>رسائل الكليان</h1>
                <?php
                $msg=mysqli_query($con,"select * from messag");
                while($row=mysqli_fetch_array($msg)){
                echo"
                <div class='col-md-4'>
                <div class='message text-center'>
                <h5>إسم المنتج</h5>
                <p>$row[name]</p>
                <span>...................................................... </span>	
                <h5>العدد</h5>
                <p>$row[contint]</p>
                <span>...................................................... </span>
                <h5>رقم الهاتف</h5>
                <p>$row[tel]</p>
                <span>......................................................</span>	
                <h5>المدينة</h5>
                <p>$row[vill]</p>
                <span>......................................................</span>
                <h5>عنوان المنزل</h5>
                <p>$row[adress]</p>
                <span class='delet'></a>
                <a href='delet.php?id=$row[id]'></a>
                <lord-icon
                src='https://cdn.lordicon.com/tntmaygd.json' 
                trigger='hover'				   
                colors='primary:#4be1ec,secondary:#4030e8' 
                style='width:50px;height:50px'>
                </lord-icon>
                </span>
                </div> 		
                </div>";}?>
                
                </div>
                </div>
</body>
</html>