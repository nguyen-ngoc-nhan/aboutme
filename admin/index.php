<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php';
?>
<?php
    if(!isset($_SESSION['arUser'])){
        header('location:auth/login.php'); 
    }
?>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/leftbar.php';
   
?>


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Trang chủ</h2>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<!-- end document-->
<?php  require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php'; ?> 
