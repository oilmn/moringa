<?php
include("conect.php");
//=========>delet product oils
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sqls="delete from prodect where id=$id";
    $con->query($sqls);
}
header("location:daxbord.php");
//==============>__lephoto
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $lesphoto="delete from lesphoto where id=$id";
    $con->query($lesphoto);
}
header("location:daxbord.php");
//==============>__pices
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $pices="delete from pices where id=$id";
    $con->query($pices);
}
header("location:daxbord.php");
//========>delet from messag client.
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $messag="delete from messag where id=$id";
    $con->query($messag);
}
header("location:messag.php");

exit;
?>