<?php
include('conect.php');
?>
<?php
if(isset($_POST['send-pices'])){
$imge=$_POST['spimg'];
$titl=$_POST['sptitl'];
$prix=$_POST['spprix'];
$pices="INSERT INTO `pices`(`img`,`titl`,`prix`) VALUES ('$imge','$titl','$prix')";
mysqli_query($con,$pices);
header("location:daxbord.php");//refrex pag
}

?>

<?php

if(isset($_POST['witsend'])){
$imge=$_FILES['img'];
$img_location=$_FILES['img']['tmp_name'];
$img_name=$_FILES['img']['name'];
$img_up="lesphoto/".$img_name;
$titl=$_POST['wittitl'];
$prix=$_POST['witprix'];
$lesphoto="INSERT INTO `lesphoto`(`witimg`,`wittitl`,`witprix`) VALUES ('$img_up','$titl','$prix')";
mysqli_query($con,$lesphoto);
if(move_uploaded_file($img_location,'lesphoto/'.$img_name)){
    echo"<script>alert('upload')</script>";
}else{
    echo"<script>alert('problem')</script>";
}
header("location:daxbord.php");//refrex pag
}


?>