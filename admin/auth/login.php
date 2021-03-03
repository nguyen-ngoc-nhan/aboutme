<?php
    session_start();
    ob_start();
?>
<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/utils/DBConnectUtils.php'; 
?>
<!DOCTYPE html>   
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="/templates/admin/assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/templates/admin/assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/templates/admin/assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/templates/admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/templates/admin/assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="/templates/admin/assets/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>  
                        <div class="login-form">
                            <?php
                                if(isset($_POST['submit'])){
                                    $name = $_POST['name'];
                                    $password = $_POST['pass'];
                                    $sql = "SELECT * FROM user WHERE username = '{$name}' AND pass = '{$password}'"; 
                                    $result = $mysqli->query($sql); 
                                    $arUser = mysqli_fetch_array($result);
                                    if(count($result)>0){
                                        $_SESSION['arUser'] = $arUser;
                                        header('location:../index.php'); 
                                   }else {
                                        echo "Tên đăng nhập hoặc mật khẩu không đúng!";
                                   }
                                }
                            ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="pass" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="register.php">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/templates/admin/assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/templates/admin/assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/templates/admin/assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/templates/admin/assets/vendor/slick/slick.min.js">
    </script>
    <script src="/templates/admin/assets/vendor/wow/wow.min.js"></script>
    <script src="/templates/admin/assets/vendor/animsition/animsition.min.js"></script>
    <script src="/templates/admin/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/templates/admin/assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/templates/admin/assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/templates/admin/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/templates/admin/assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/templates/admin/assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/templates/admin/assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/templates/admin/assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php
    ob_end_flush();
?>




