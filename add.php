<!-- PHP _منتجات زيوت_-->
<?php
include('conect.php');
?>
<?php
//add index oils in database .
if(isset($_POST['send'])){
$imge=$_FILES['img'];
$img_location=$_FILES['img']['tmp_name'];
$img_name=$_FILES['img']['name'];
$img_up="images/".$img_name;
$titl=$_POST['titl'];
$prix=$_POST['prix'];
$sqls="INSERT INTO `prodect`(`img`,`titl`,`prix`) VALUES ('$img_up','$titl','$prix')";
mysqli_query($con,$sqls);
if(move_uploaded_file($img_location,'images/'.$img_name)){
    echo"<script>alert('upload')</script>";
}else{
    echo"<script>alert('problem')</script>";
}
header("location:daxbord.php");//refrex pag
}
?>
<!----====== add message in database messag les client -->
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$contint=$_POST['contint'];
$tel=$_POST['tel'];
$vill=$_POST['vill'];
$adress=$_POST['adress'];
$messag="INSERT INTO `messag` (`name`,`contint`,`tel`,`vill`,`adress`) VALUES ('$name','$contint','$tel','$vill','$adress')";
mysqli_query($con,$messag);
header("location:index.php");//refrex pag
}
?>
