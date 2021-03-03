<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/leftbar.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/utils/CheckUserUtils.php';

?>
            
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                               <!-- <div class="overview-wrap">
                                    <h2 class="title-1">Quản lý bài viết</h2>
                                </div>-->
                            </div>
                        </div>
                        <!-- Admim content -->
                        <div class="admin-content">
                            <div class="button-group">
                                <button type="button" class="btn btn-success"><a href="add.php" style="color: white">Add Post</a></button>
                                <button type="button" class="btn btn-success">Manager Post</button>
                            </div> 

                            <div class="content">

                                <h2 class="page-title">Quản lý bài viết</h2>

                                <table>
                                    <thead>
                                        <th>N</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Create</th>
                                        <th>Picture</th>
                                        <th colspan="3">Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM posts";
                                            $postsAdd = $mysqli -> query($sql);
                                            while ($arAdd = mysqli_fetch_assoc($postsAdd)) {
                                                $postsID = $arAdd['id_posts'];
                                                $name = $arAdd['name'];
                                                $body = $arAdd['body'];
                                                $author = $arAdd['author'];
                                                $picture = $arAdd['picture'];
                                                $create = $arAdd['create_at'];
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $postsID?></td>
                                            <td width="400px"><?php echo $name?></td>
                                            <td><?php echo $author?></td>
                                            <td><?php echo $create?></td>
                                            <td><img src="/files/<?php echo $picture?>" class="imgposts" width="70px" height="40px"></td>
                                            <td><a href="#" class="edit">edit</a></td>
                                            <td><a href="#" class="delete">delete</a></td>
                                            <td><a href="#" class="publish">publish</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- End Admin content -->
                        
                       
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
<script type="text/javascript">
    $(document).ready(function(){
         $("#home-admin").addClass('active');
    });
</script>








