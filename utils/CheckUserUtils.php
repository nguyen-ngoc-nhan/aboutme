<?php
    if(!isset($_SESSION['arUser'])){
        header('location:../auth/login.php');
    }
?>