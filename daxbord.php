<?php
include('conect.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- script google adsens -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1321444896638265" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="oil, moringa, argan ,اركان , زيوت, تجميل ,الشعر">
        <meta name="description" content="عناية الشعر بالزيوت الطبيعية  مع اعشاب الشاي وجميع مستلزماتك الصحية">
        <title>Oils-mani </title>
        <link rel="icon" href="image/hanna.jpg">
        <link rel="stylesheet" href="daxbord.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
    </head>

    <body style="background-color: #cbd5e1">
        <!-- =====>les button__<====== -->
        <div class="group-button mt-5">
            <div class="box-grp flex">
                <button onclick="btn1()">اضافة منتج</button>
                <button onclick="btn2()">إضافة منتجات اخرى</button>
                <button onclick="btn3()">إضافة منتجات توابل</button>
                <button onclick="btn4()">منتجات زيوت</button>
            </div>   
            <div class="box-grp flex"> 
                <button onclick="btn5()">منتجات اخرى</button>
                <button onclick="btn6()">منتجات توابل</button>
                <button><a href="index.php">الصفحةالرئيسية</a></button>
            </div>
        </div>
        <div class="container-fluid text-center mt-5">
            <div class="row">
                <div class=" col-2 col-md-2 mune"></div>

                <!-- ==============__منتجات زيوت__============== -->
                <div class="col-md-4" >
                    <div class="frm-dix" id="box1">
                        <form action="add.php" method="post" enctype="multipart/form-data">
                            <h2>اضافة منتج</h2>
                            <label for="img" class="pluslabel"><span>
                                <lord-icon
                                    src="https://cdn.lordicon.com/xzksbhzh.json"
                                    trigger="hover"
                                    colors="primary:#c7166f,secondary:#ebe6ef"
                                    style="width:50px;height:50px">
                                </lord-icon><b>أضف صورة</b></span></label><br>
                            <input type="file" name="img" id="img" required>
                            <br>
                            <label for="title"> : إسم ألمنتوج  <br>
                            <input type="text" name="titl" id="title" required>
                        </label>
                            <label for="prix">ثمن المنتوج<br>
                            <input type="text" name="prix" id="prix" required>
                        </label><br>
                            <button type="submit" name="send">
                                <lord-icon
                                    src="https://cdn.lordicon.com/kofdvwty.json"
                                    trigger="hover"
                                    colors="primary:#ffc738,secondary:#30e849"
                                    style="width:60px;height:50px">
                                </lord-icon>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- ========================____montajat okhra __=========================================================-->
                <div class="col-md-4" >
                    <div class="frm-dix" id="box2">
                        <form action="addft.php" method="post" enctype="multipart/form-data">
                            <h2>إضافة منتجات اخرى</h2>
                            <label for="imge" class="pluslabel"><span>
                                <lord-icon
                                    src="https://cdn.lordicon.com/xzksbhzh.json"
                                    trigger="hover"
                                    colors="primary:#c7166f,secondary:#07caa0"
                                    style="width:50px;height:50px">
                                </lord-icon><b>أضف صورة</b></span></label> <br>
                            <input type="file" name="img" id="imge">
                        <br>
                            <label for="titl">:تعريف ألمنتج <br>
                            <input type="text" name="wittitl" id="title">
                        </label>
                            <label for="prix"> :ثمن أو وصف ألمنتج <br>
                            <input type="text" name="witprix" id="prix">
                        </label><br>
                            <button type="submit" name="witsend">
                                <lord-icon
                                    src="https://cdn.lordicon.com/kofdvwty.json"
                                    trigger="hover"
                                    colors="primary:#ffc738,secondary:#30e849"
                                    style="width:60px;height:50px">
                                </lord-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ==============__منتجات [PICES]_============== -->
            <div class="row">
            <div class=" col-2 col-md-2 mune"></div>
            <div class="col-md-4" id="box3">
                    <div class="frm-dix" >
                        <form action="addft.php" method="post" enctype="multipart/form-data">
                            <h2>إضافة منتجات توابل</h2>
                            <input type="url" name="spimg" id="img" required>
                            <br>
                            <label for="sptitle"> : إسم ألمنتوج  <br>
                            <input type="text" name="sptitl" id="sptitle" required>
                        </label>
                            <label for="spprix">ثمن المنتوج<br>
                            <input type="text" name="spprix" id="spprix" required>
                        </label><br>
                            <button type="submit" name="send-pices">
                                <lord-icon
                                    src="https://cdn.lordicon.com/kofdvwty.json"
                                    trigger="hover"
                                    colors="primary:#ffc738,secondary:#30e849"
                                    style="width:60px;height:50px">
                                </lord-icon>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- =============================tablue prodect ___=============================================-->
        <div class="container-fluid  text-center mb-5">
            <div class="row">
                <div class=" col-2 col-md-2 mune"></div>
                <div class="col-md-3"id="tbl1">
                    <div class="box-prod mt-5">
                        <h3>منتجات زيوت</h3>
                        <!--prodect won-->
                        <?php
                            while($row=mysqli_fetch_array($res)){
                            echo"
                            <div class='prodect flex'>
                                <img src='$row[img]'>
                                <p>$row[titl]</p>
                                <b>$row[prix]</b>
                                <span class='bg-info flex'><a href='delet.php?id=$row[id]'>delet</a></span>
                                <span class='bg-dark flex'><a href='updet.php?id=$row[id]'>updet</a></span>
                            </div>";}?>
                        
                    </div>
                </div>
                <!-- ==============tabloue les foto [PHOTO]__=============== -->
                <div class="col-md-4" id="tbl2">
                    <div class="box-prod mt-5">
                        <h3> منتجات اخرى</h3>
                        <?php
                            while($row=mysqli_fetch_array($photo)){
                            echo"
                            <div class='prodect flex'>
                                <img src='$row[witimg]'>
                                <p>$row[wittitl]</p>
                                <b>$row[witprix]</b>
                                <span class='bg-info flex'><a href='delet.php?id=$row[id]'>delet</a></span>
                                <span class='bg-dark flex'><a href='updet.php?id=$row[id]'>updet</a></span>
                            </div>";}?>
                    </div>
                </div>
                <!-- ==============tabloue les pices [PICES]__=============== -->
                <div class="col-md-3" id="tbl3">
                    <div class="box-prod mt-5">
                        <h3> منتجات توابل</h3>
                        <!--prodect won-->
                        <?php
                            $pices=mysqli_query($con,"select * from pices");
                            while($row=mysqli_fetch_array($pices)){
                            echo"
                            <div class='prodect flex'>
                                <img src='$row[img]'>
                                <p>$row[titl]</p>
                                <b>$row[prix]</b>
                                <span class='bg-info flex'><a href='delet.php?id=$row[id]'>delet</a></span>
                                <span class='bg-dark flex'><a href='updet.php?id=$row[id]'>updet</a></span>
                            </div>";}?>
                    </div>
                </div>

            </div>
        </div>
        <script>
            function btn1() {
                document.getElementById("box1").style.display = "block";
                document.getElementById("box2").style.display = "none";
}
        </script>
        <!--============-==========================-->
        </script>
        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="java.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    </body>

    </html>