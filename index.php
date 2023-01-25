<?php
include('conect.php');
?>
    <!DOCTYPE html>
    <html lang="ar">

    <head>
        <!-- script google adsens -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1321444896638265" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="oil, moringa, argan ,اركان , زيوت, تجميل ,الشعر">
        <meta name="description" content="عناية الشعر بالزيوت الطبيعية  مع اعشاب الشاي وجميع مستلزماتك الصحية">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
        <title>Oils-mani </title>
        <link rel="icon" href="images/hanna.jpg">
        <link rel="stylesheet" href="tikrar.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
        />
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
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>

    <body id="body" class="light-mode loading">
        <!--  -->
        <style>
            .loading {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                border-radius: 50%;
                background: #D1DA21;
                animation: anime 2s linear 0s infinite alternate;
            }
            
            .loading:before {
                content: '';
                width: 80px;
                height: 80px;
                background: #13BF5F;
                border-radius: 50%;
            }
            
            .loading * {
                display: none;
            }
            
            @keyframes anime {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(0.6);
                }
                100% {
                    transform: scale(0);
                }
            }
            
            * {
                margin: 0;
                padding: 0;
            }
        </style>
        <!--======= NAVBAR miniu--============================-->
        <div class="miniu"></div>
        <!-- Swiper__=================== -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/hanabg.jpg"></div>
                <div class="swiper-slide"><img src="images/logo2.jpg"></div>
                <div class="swiper-slide"><img src="images/logo3.jpg"></div>
                <div class="swiper-slide"><img src="images/logo1.jpg"></div>
            </div>
            <div class="swiper-scrollbar"></div>
        </div>
        <!--=========>_box muniu-->
        <div class="box-muni flex"></div>
        <!--run scrol-->
        <div class="horizontal-scroll mt-2">
            <div class="card1">
                <div id="inner">
                    <img src="images/scrl1.png">
                    <h3>أفضل مبيعات</h3>
                </div>
            </div>
            <div class="card1">
                <div id="inner">
                    <img src="images/1 (7).jpg">
                    <h3>منتج جديد</h3>
                </div>
            </div>
            <div class="card1">
                <div id="inner">
                    <img src="images/hanna.jpg">
                    <h3>حناء حسب اللون</h3>
                </div>
            </div>
            <div class="card1">
                <div id="inner">
                    <img src="images/thevert.jpg"/>
                    <h3>أعشاب الشاي</h3>
                </div>
            </div>
            <div class="card1">
                <div id="inner">
                    <img src="images/kabsol.png">
                    <h3>زيت كبسولات</h3>
                </div>
            </div>
        </div>
        
        <!-- ¡¡¡end scrol--!!button group-->
        <div class="container">
            <div class="row">
                <!--===>__les button tout__========-->
    		<div class="btn-grp mt-4"></div>
            </div>
        </div>
        <!--==========__تنبيهات الزائد__====================-->
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="images/moi.jpg" class="rounded me-2" width="20%">
                    <strong class="me-auto">  رشيد فتحي</strong>
                    <small>* متصل حاليا</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-center"> الملف الشخصي</div>
                <div class="toast-body text-center">
                    <span><a href="https://wa.me/qr/F7HYZFVITLEJI1"><ion-icon name="logo-whatsapp"></ion-icon></a></span>
                    <span><a href="http://instagram.com/oilsmani?utm_source=qr" ><ion-icon name="logo-instagram"></ion-icon></a></span>
                </div>
            </div>
        </div>
        <!-- ========__les produit oils box__ =================== ================================-->
        <div id="b1" class="container b-box">
            <div class="row">
                <!--1-->
                <?php
            while($row=mysqli_fetch_array($res)){
            echo"
                <div class='col-6 col-md-3'>
                    <div class='m-box'>
                    <a href='git-product.php?id=$row[id]'><img src='$row[img]'></a>
                        <div class='titl'>
                            <p>$row[titl]</p>
                            <b>$row[prix]</b>
                            
                        </div>
                        <span ><a href='git-product.php?id=$row[id]'>
                        <lord-icon
                        src='https://cdn.lordicon.com/alnsmmtf.json'
                        trigger='hover'
                        colors='primary:#911051,secondary:#1b1091'
                        style='width:30px;height:30px'>
                    </lord-icon>
                        </a></span>
                    </div>
                </div>";}?>
            </div>
        </div>
        <!-- - les photo--  ====================__lesphoto__====================================-->
        <div id="b2" class="container mb-3">
            <div class="row mt-5">
            <?php
            while($row=mysqli_fetch_array($photo)){
                echo"
                <div class='lesphoto col-md-4 text-center mt-5'>
                    <p>$row[wittitl]</p>
                    <img src='$row[witimg]'>
                    <b>$row[witprix]</b>
                </div>";}?>

                <div class="ext"><button><a href="they.html">المزيد من الاختيارات </a></button></div>
            </div>
        </div>
        <!--============--footer--==========================-->
        <footer></footer>
        <div class="mune">
            <!--mune-flex-->
            <div class="mune-flex">
                <span><a><ion-icon name="home-outline"></ion-icon></a></span>
                <span><ion-icon name="happy-outline" type="button" id="liveToastBtn"></ion-icon></span>
                <span><a href="https://wa.me/qr/PZFJOL5QN57YI1"><ion-icon name="logo-whatsapp"></ion-icon></a></span>
                <span><a href="http://instagram.com/oilsmani?utm_source=qr" ><ion-icon name="logo-instagram"></ion-icon></a></span>
            </div>
        </div>
        <!--============>-__link frimwork__<==========================-->
        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script asyns src="tikrar.js"></script>
        <script src="java.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

    </html>