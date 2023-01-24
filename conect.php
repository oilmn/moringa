<?php
    //conect to databes
    $host='sql101.epizy.com';
    $user='epiz_33259564';
    $pass='QjzXKYpmBoP';
    $db='epiz_33259564_storoils';//name de datatbes
    $con=mysqli_connect($host,$user,$pass,$db);
    $res=mysqli_query($con,"select * from prodect");
    $photo=mysqli_query($con,"select * from lesphoto");

    ?>