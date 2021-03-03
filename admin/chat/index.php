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
                                <h2 class="page-title">Quản lý bình luận</h2>
                                <table>
                                    <thead>
                                        <th>N</th>
                                        <th>Author</th>
                                        <th>Comment</th>
                                        <th colspan="4">Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Đây là bài viết đầu tiên của tôi</td>
                                            <td>NgocNhan</td>
                                            <td><a href="#" class="approve" style="color:orange;">Approve</a></td>
                                            <td><a href="#" class="reply">Reply</a></td>
                                            <td><a href="#" class="edit">edit</a></td>
                                            <td><a href="#" class="delete">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Đây là bài viết thứ 2 của tôi</td>
                                            <td>NgocNhan</td>
                                            <td><a href="#" class="approve"style="color:orange;">Approve</a></td>
                                            <td><a href="#" class="reply">Reply</a></td>
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
   
