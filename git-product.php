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
        <script type='text/javascript'>
            function nocontext(t) {
                var e = null == t ? event.srcElement.tagName : t.target.tagName;
                return "IMG" == e ? (alert(alertMsg), !1) : void 0
            }
            var alertMsg = " يمنع منعاً باتاً نسخ الصور أو جزء منها... شاكرين تفهمكم ";
            document.oncontextmenu = nocontext;
        </script>
    </head>
    <body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Marhey&display=swap');
        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: rgb(110, 154, 236);
        }
        
        header {
            width: 100%;
            height: 60vh;
            background-color: cadetblue;
            position: relative;
        }
        
        header .mune {
            position: relative;
            justify-content: space-between !important;
            top: 0;
            width: 100%;
            height: 3em;
            font-size: 22px;
            padding: 0 0.5em;
            margin-bottom: 1.5em;
        }
        
        header .mune span {
            width: 40px;
            height: 40px;
            background-color: rgb(231, 227, 228);
            border-radius: 50%;
            box-shadow: 0 -1px 6px white;
        }
        
        .box-img {
            width: 100%;
            height: 30vh;
        }
        
        .box-img img {
            width: 90%;
            border-radius: 3em;
        }
        /*les contin*/
        
        .contin {
            position: absolute;
            width: 100%;
            height: 140vh;
            background-color: aliceblue;
            border-radius: 3em 3em 0 0;
            top: 50vh;
        }
        
        .contin .line {
            position: absolute;
            width: 90px;
            height: 10px;
            background-color: cadetblue;
            border-radius: 8px;
            left: 42%;
            margin-top: 8px;
        }
        
        .contin .contin-text {
            margin: 3em 2em 0 0;
            text-align: end;
            font-family: 'Marhey', cursive;
        }
        
        .contin-text span {
            width: 4em;
            height: 1.5em;
            background-color: rgb(221, 182, 82);
            border-radius: 8px;
        }
        
        .contin .price {
            padding: 1em 0 0 3em;
            justify-content: space-between;
        }
        
        .contin .price span b {
            margin-right: 5px;
            color: cadetblue;
        }
        
        .contin .price span i {
            color: crimson;
            font-size: 22px;
        }
        /* les input contat */
        
        form h3 {
            position: absolute;
            right: 1em;
            margin-top: 4em;
        }
        
        form h3 i {
            font-size: 15px;
        }
        
        .inputs-send {
            z-index: 100;
            display: block;
            margin-top: 10em;
        }
        
        .inputs-send input {
            width: 100%;
            height: 3.5em;
            border-radius: 4em;
            margin-top: 2.5em;
            border: none;
            outline: none;
            box-shadow: rgba(0, 0, 0, 0.315) 0px 3px 8px;
            text-align: center;
        }
        /* input[type="submit"]*/
        .inputs-send button{
            border:none;
            background-color:transparent;
        }
        .inputs-send span  {
            background-color: crimson;
            color: aliceblue;
            margin-top: 20px;
            border-radius:4em;
        }
        
        .inputs-send input::placeholder {
            color: rgb(58, 51, 53);
            text-align: end;
            margin-right: 30px;
        }
        
        .inputs-send label {
            position: absolute;
            right: 2em;
            margin-top: 10px;
            font-weight: 700;
            font-size: 18px;
        }
        </style>
<!--======= NAVBAR miniu--============================-->
<div style="display:none" class="miniu"></div>
<div style="display:none" class="btn-grp mt-4"></div>
<div style="display:none" class="box-muni flex"></div>
<!--=========>get oils<===============-->

<?php
$product_id = $_GET['id'];
$sql = "SELECT * FROM  prodect WHERE id = $product_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo"
        <header>
        <div class='container'>
            <div class='mune flex'>
                <span class='flex'><i class='ti ti-heart'></i></span>
                <a href='index.php'><span class='flex'><i class='ti ti-arrow-narrow-right'></i></span></a>
            </div>
            <div class='box-img flex'>
                <img src='$row[img]'>
            </div>
    </header>
    <!-- les contin -->
    <div class='container'>
        <div class='row'>
            <div class='col flex'>
                <div class='contin'>
                    <span class='line'></span>
                    <div class='contin-text'>
                        <h2>$row[titl]</h2>
                        <div class='price flex'>
                            <b>$row[prix]</b>
                            <span class='flex'><b>56</b><i class='ti ti-heart'></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <!--send les messag leclient-->
            <form action='add.php' method='post' enctype='multipart/form-data'>
                <h3 class='text-end'> <i>(أدخل معلوماتك لإتمام ألطلب)</i> فوترة الطلب</h3>
                <div class='flex'>
                    <div class='inputs-send'>
                        <label for='name'>إسم ألمنتوج</label>
                        <input type='text' name='name' placeholder='أدخل إسم ألمنتوج' required>
                        <label for='contint'>ألعدد</label>
                        <input type='text' name='contint' placeholder='ألعدد' required>
                        <label for='tel'>رقم الهاتف </label>
                        <input type='tel' name='tel' placeholder='أدخل رقم الهاتف ' required>
                        <label for='vill'>إسم ألمدينة</label>
                        <input type='text' name='vill' placeholder='أدخل إسم ألمدينة' required>
                        <label for='adress'>عنوان ألمنزل</label>
                        <input type='text' name='adress' placeholder='أدخل عنوان ألمنزل' required>
                        <span class='send flex'>
                                    <button type='submit' name='submit'>
                                    <lord-icon
                                        src='https://cdn.lordicon.com/rhvddzym.json'
                                        trigger='hover'
                                        colors='primary:#1b1091,secondary:#08a88a'
                                        style='width:50px;height:50px'>
                                    </lord-icon>
                                     
                                    </button>
                                    إرسال ألطلب
                                </span>
                    </div>
                </div>
            </form>
        </div>
    </div>";}}?>
    
        <!--=========>__get pices__<====================================-->
        <?php
        $pices = $_GET['id'];
        $pices="SELECT * FROM pices WHERE id =$pices";
        $result = $con->query($pices);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo"
                <header>
                <div class='container'>
                    <div class='mune flex'>
                        <span class='flex'><i class='ti ti-heart'></i></span>
                        <a href='pices.php'><span class='flex'><i class='ti ti-arrow-narrow-right'></i></span></a>
                    </div>
                    <div class='box-img flex'>
                        <img src='$row[img]'>
                    </div>
            </header>
            <!-- les contin -->
            <div class='container'>
                <div class='row'>
                    <div class='col flex'>
                        <div class='contin'>
                            <span class='line'></span>
                            <div class='contin-text'>
                                <h2>$row[titl]</h2>
                                <div class='price flex'>
                                    <b>$row[prix]</b>
                                    <span class='flex'><b>56</b><i class='ti ti-heart'></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==============__send les messag leclient__============================-->
                    <form action='add.php' method='post' enctype='multipart/form-data'>
                        <h3 class='text-end'> <i>(أدخل معلوماتك لإتمام ألطلب)</i> فوترة الطلب</h3>
                        <div class='flex'>
                            <div class='inputs-send'>                       
                                <label for='name'>إسم ألمنتوج</label>
                                <input type='text' name='name' placeholder='أدخل إسم ألمنتوج'required>
                                <label for='contint'>ألعدد</label>
                                <input type='text' name='contint' placeholder='ألعدد' required>
                                <label for='tel'>رقم الهاتف </label>
                                <input type='tel' name='tel' placeholder='أدخل رقم الهاتف ' required>
                                <label for='vill'>إسم ألمدينة</label>
                                <input type='text' name='vill' placeholder='أدخل إسم ألمدينة' required>
                                <label for='adress'>عنوان ألمنزل</label>
                                <input type='text' name='adress' placeholder='أدخل عنوان ألمنزل' required>
                                <span class='send flex'>
                                    <button type='submit' name='submit'>
                                    <lord-icon
                                        src='https://cdn.lordicon.com/rhvddzym.json'
                                        trigger='hover'
                                        colors='primary:#1b1091,secondary:#08a88a'
                                        style='width:50px;height:50px'>
                                    </lord-icon>                                    
                                    </button>
                                    إرسال ألطلب
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>";
            }
        };

        ?>
        <!--============--footer--==========================-->
        <footer></footer>

        <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
        <script asyns src="tikrar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>