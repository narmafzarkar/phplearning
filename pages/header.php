<?php include 'db.php' ;
session_start();
if(@$_GET['logout']=='yes')
    unset($_SESSION['user']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/flickity.css">
    <title>ARIC</title>
</head>
<body>
<!-- Header -->
<header class="clearfix">
    <div class="wrapper">


        <div class="Toolbar clearfix">
            <div class="right-Toolbar clearfix">

                <a href="index.php">
                    <span><img src="../assets/img/logo.png" alt="logo" /></span>
                </a>
            </div>

            <div class="left-Toolbar">
                <a href="#">

                    09101393153
                </a>
            </div>
        </div>
    </div>

    <nav class="menu clearfix">
        <div class="wrapper">

<?php  if(@$_SESSION['user'])
{ echo "<div class=\"menu-left clearfix\">";
echo "کاربر ".$_SESSION['user']." خوش آمدید";
    echo "<a href='index.php?logout=yes'>  /خروج</a></div>";

}
else
{
    ?>
            <div class="menu-left clearfix">

                <a href="login.php">ورود</a>
                <a href="">/</a>
                <a href="register.php">ثبت نام</a>
            </div>
<?php } ?>
            <div class="menu-nav">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="menu-right">
                <ul>
                    <li><a href="index.php">صفحه اصلی</a></li>
                    <li><a href="category.php">سررسید و تقویم</a></li>
                    <li><a href="catalog.php">دانلود کاتالوگ</a></li>
                    <li><a href="tips.php">نکات سررسید</a></li>
                    <li><a href="news.php">اخبار</a></li>
                    <li><a href="about-us.php">درباره ما</a></li>
                    <li><a href="contact-us.php">تماس با ما</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>