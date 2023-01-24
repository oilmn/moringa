<?php
include('conect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    <link rel="stylesheet" href="tikrar.css">
    <link rel="stylesheet" href="style.css">
    <title> توابل</title>
    <script type='text/javascript'>
            //<![CDATA[
            function nocontext(t) {
                var e = null == t ? event.srcElement.tagName : t.target.tagName;
                return "IMG" == e ? (alert(alertMsg), !1) : void 0
            }
            var alertMsg = " يمنع منعاً باتاً نسخ الصور أو جزء منها... شاكرين تفهمكم ";
            document.oncontextmenu = nocontext;
            //]]>
        </script>
</head>


<body>
    <style>
        /*epises*/
        @import url('https://fonts.googleapis.com/css2?family=Marhey&display=swap'); 
        .contint-epis {
            width:100%;
            margin: 2em 0;
            position: relative;
            background-color: #f1f5f9;
            padding-bottom: 2em;
        }
        .contint-epis h5{
            margin:0 12px 12px 0;
            font-family: 'Marhey', cursive;
        }
        
        .box-epis {
            position: relative;
            width: 100%;
            height: 13em;
            background-color: White;
            border-radius: 1em;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            font-family: 'Marhey', cursive;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .box-epis img {
            width: 90%;
            height: 6em;
            border-radius: 20px;
        }
        
        .box-epis .pr-epis {
            position: absolute;
            width: 100%;
            bottom: 12px;
            font-size: 14px;
            padding: 0 20px;
        }
        
        .pr-epis span {
            position: absolute;
            width: 45px;
            height: 45px;
            background-color: greenyellow;
            justify-content: center !important;
            border-radius: 12px 12px 2em 12px;
            right: 0;
        }
        .ti-shopping-cart-plus{
            color:crimson;
            font-weight:600;
            font-size:15px;
        }
        .pr-epis span:hover{
            background-color:rgb(92, 236, 26);
        }
        @media screen and (min-width:1030px) and (max-width:2600px) {
            .contint-epis {
                margin: 5px 9em;
                border-radius: 8px;
                padding: 1em;
            }
}
        
    </style>
    <div class="container">
    	<div class="row">
            <!--====>__miniu__<==== -->
            <div class="miniu"></div>
            <div class="imageps flex">
                <img id="image" src="https://cdn.discordapp.com/attachments/1057419543066198149/1059894817624182814/pexels-mareefe-674483.jpg">
            </div>
            <!--===>__les button tout jami3 button link pages__========-->
    		<div class="btn-grp mt-4"></div>
    	</div>
    </div>
    <!--=========>_box muniu-->
    <div class="box-muni flex"></div>

    <div class="container pt-5 contint-epis">
        <div class="row">
            <h5 class="text-end">توابل</h5>
        <?php
        $pices=mysqli_query($con,"select * from pices");
        while($row=mysqli_fetch_array($pices)){
            echo"
            <div class='col-6 col-md-3 text-center'>
                <div class='box-epis'>
                    <h2>$row[titl]</h2>
                    <img src='$row[img]'>
                    <div class='pr-epis flex'>
                        <b>$row[prix]</b>
                        <span class='flex'><a href='git-product.php?id=$row[id]'><i class='ti ti-shopping-cart-plus'></i></span></a>
                    </div>
                </div>
            </div>";}?>
        </div>
    </div>
    <!--============--footer--==========================-->
    <footer class="footer"></footer>
    <script>
        var imagine = ["https://cdn.discordapp.com/attachments/1057419543066198149/1060634830833983598/pexels-mareefe-678414.jpg","https://cdn.discordapp.com/attachments/1057419543066198149/1060634830301302835/pexels-pixabay-269245.jpg","https://cdn.discordapp.com/attachments/1057419543066198149/1060634829990928464/pexels-polina-tankilevitch-3735206.jpg","https://cdn.discordapp.com/attachments/1057419543066198149/1059894817624182814/pexels-mareefe-674483.jpg"]
        var index = 0;
        setInterval(function() {
            if (index===imagine.lenght){
                index = 0;
            }
            document.getElementById("image").src = imagine[index];
            index++;
        }, 3000);
    </script>

    <script src="tikrar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>