<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/leftbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/Utils/CheckUserUtils.php';

?>
            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="admin-content">
                            <div class="content">
                                <h2 class="page-title">Quản lý người dùng</h2>
                                <table>
                                    <thead>
                                        <th>N</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th colspan="2">Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nhan nguyễn</td>
                                            <td>admin</td>
                                            <td><a href="#" class="edit">edit</a></td>
                                            <td><a href="#" class="delete">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Trinh nguyễn</td>
                                            <td>author</td>
                                            <td><a href="#" class="edit">edit</a></td>
                                            <td><a href="#" class="delete">delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/footer.php';
   ?>
