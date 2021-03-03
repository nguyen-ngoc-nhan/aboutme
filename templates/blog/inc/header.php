


<?php 
      require_once $_SERVER['DOCUMENT_ROOT'].'/utils/DBConnectUtils.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/templates/blog/img/favicon.png" rel="icon">
    <link href="/templates/blog/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS File -->
    <link href="/templates/blog/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/templates/blog/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/templates/blog/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/templates/blog/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/templates/blog/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/templates/blog/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/templates/blog/css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

    <!--/ Nav Star /-->
    <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll" href="#page-top">N-N-Nhân</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
                <ul class="navbar-nav">
                    <?php
                        $query = "SELECT * FROM menu ";
                        $ketqua = $mysqli->query($query);
                        while ($arMenu=mysqli_fetch_assoc($ketqua)) {
                        $name = $arMenu['name'];
                        $urlName = $arMenu['url'];
                        $url = '#'.$urlName;
                    ?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll active" href="<?php echo $url?>"><?php echo $name?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--/ Nav End /-->

    <!--/ Intro Skew Star /-->
    <div id="home" class="intro route bg-image" style="background-image: url(/templates/blog/img/intro-bg.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="intro-title mb-4">I am Nhan</h1>
                    <p class="intro-subtitle"><span class="text-slider-items">Web Developer,Web Designer,Frontend Developer,PHP</span><strong class="text-slider"></strong></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>