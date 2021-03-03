<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/header.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/inc/leftbar.php';
    

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
                        
                        <div class="admin-content">
                            <div class="button-group">
                                <button type="button" class="btn btn-success"><a href="add.php" style="color: white">Add Post</a></button>
                                <button type="button" class="btn btn-success"><a href="index.php" style="color: white">Manager Post</a></button>
                            </div> 

                         <div class="content">

                            <h2 class="page-title">Quản lý bài viết</h2>
                                <?php
                                    $name ="";
                                    $detail ="";
                                    $author = "";
                                    if(isset($_POST['submit'])){
                                        $name = $_POST['name'];
                                        $detail = $_POST['detail'];
                                        $author = $_POST['author'];


                                        $arFile = $_FILES['picture'];
                                        $fileName = $arFile['name'];

                                        if($fileName!=''){
                                            //change file name
                                            $fileName = renameFile($fileName);

                                            $tmpName = $arFile['tmp_name'];
                                            $pathUpload = $_SERVER['DOCUMENT_ROOT'].'/files/'.$fileName;
                                            move_uploaded_file($tmpName,$pathUpload);
                                        }

                                        //Insert into database
                                        $sqlAddPost = "INSERT INTO posts (name,body,author,picture) VALUES ('{$name}','{$detail}','{$author}','{$fileName}')";
                                        $resultAddPost = $mysqli->query($sqlAddPost);
                                        if($resultAddPost){
                                            header('location:/admin/post?msg=success');
                                        }else {
                                            echo "Có lỗi trong quá trình thêm, vui lòng thử lại";
                                        }


                                    }

                                ?>

                                <form action="" method="post" enctype="multipart/from-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="name"  placeholder="Nhập tiêu đề">
                                    </div>
                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea name="detail" id="body" name="detail"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" class="form-control" name="author" placeholder="Nhập tên tác giả">
                                    </div>
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input type="file" name="picture" />
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn-success"><a href="add.php" style="color:white">Add Post</a></button>
                                    </div>
                                </form>
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
    
