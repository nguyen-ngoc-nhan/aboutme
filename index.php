<?php 
    include_once $_SERVER['DOCUMENT_ROOT'].'/templates/blog/inc/header.php'; 
?> 

    <!--/ Intro Skew End /-->

    <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5">
                                        <div class="about-img">
                                            <img src="/templates/blog/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info">

                                            <?php
                                                $query = "SELECT * FROM profile ";
                                                $ketqua = $mysqli->query($query);
                                                while ($arProfile=mysqli_fetch_assoc($ketqua)) {
                                                $name = $arProfile['name'];
                                                $subjects = $arProfile['subjects'];
                                                $email = $arProfile['email'];
                                                $phone = $arProfile['phone'];

                                            ?>
                                            <p><span class="title-s">Name: </span> <span><?php echo $name?></span></p>
                                            <p><span class="title-s">Profile: </span> <span><?php echo $subjects?></span></p>
                                            <p><span class="title-s">Email: </span> <span><?php echo $email?></span></p>
                                            <p><span class="title-s">Phone: </span> <span><?php echo $phone?></span></p>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="skill-mf">
                                    <p class="title-s">Skill</p>

                                    <?php
                                        $query = "SELECT * FROM skill ";
                                        $ketqua = $mysqli->query($query);
                                        while ($arSkill=mysqli_fetch_assoc($ketqua)) {
                                        $name = $arSkill['name'];
                                        $percent = $arSkill['percent'];
                                    ?>

                                    <span><?php echo $name?></span> <span class="pull-right"><?php echo $percent;?>%</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: <?php echo $percent?>%;" aria-valuenow="<?php echo $percent;?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <?php }?>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            Chào bạn
                                        </h5>
                                    </div>
                                    <p class="lead">
                                        Mình là nhân. Tôi không biết làm sao bạn đã trở thành bạn bè với tôi trên Facebook, có thể chúng ta đã quen nhau ngoài đời, hay 1 người bạn giới thiệu cho bạn. Cũng có thể bạn ngẫu nhiên thấy tôi.
                                    </p>
                                    <p class="lead">
                                        Nhưng dù sao thì bạn cũng đã đến đây, và rất vui khi thấy bạn ở đây để trò chuyện cùng tôi, chuẩn bị ngồi đọc “đoạn văn giới thiệu bản thân không theo cấu trúc nào” của tôi ở đây. Bỗng nhớ thời đi học tôi viết văn cực tệ, các bài văn viết luôn luôn chỉ
                                        3 hoặc 4 hoặc 5, cao nhất là 6 điểm, thế mà suốt năm nay tôi kiếm được nhiều tiền là nhờ công lớn của môn “viết văn” đấy, nhưng lần này tôi học nó ở trường đời.
                                    </p>
                                    <p class="lead">
                                        Dưới đây tôi sẽ giới thiệu bản thân khái quát và ngắn gọn rồi lồng ghép vào đây một vài bài học và ý tưởng tôi đã trải nghiệm mà nó giúp tôi thay đổi hoàn toàn cuộc sống . Hy vọng qua bài viết này chúng ta không chỉ hiểu nhau hơn mà bạn còn học được nhiều
                                        bài học xương máu từ tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--/ Section Services Star /-->
    <section id="service" class="services-mf route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Services
                        </h3>
                        <p class="subtitle-a">
                            Sử dụng dịch vụ hoàn toàn miễn phí
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $query = "SELECT * FROM services ";
                    $ketqua = $mysqli->query($query);
                    while ($arServices=mysqli_fetch_assoc($ketqua)) {
                    $name = $arServices['name'];
                    $detail = $arServices['detail'];
                    $icon = $arServices['icon'];
                    ?>
                <div class="col-md-4">

                    <div class="service-box">
                        <div class="service-ico">
                            <span class="ico-circle"><i class="<?php echo $icon?>"></i></span>
                        </div>
                        <div class="service-content">
                            <h2 class="s-title"><?php echo $name?></h2>
                            <p class="s-description text-center">
                                <?php echo $detail?>  
                            </p>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!--/ Section Services End /-->

    <div class="section-counter paralax-mf bg-image" style="background-image: url(/templates/blog/img/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">04</p>
                            <span class="counter-text">DỰ ÁN HOÀN THIỆN</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">01</p>
                            <span class="counter-text">SỐ NĂM KINH NGHIỆM</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ios-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">0</p>
                            <span class="counter-text">TỔNG KHÁCH HÀNG</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
                        </div>
                        <div class="counter-num">
                            <p class="counter">0</p>
                            <span class="counter-text">GIẢI THƯỞNG</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ Section Portfolio Star /-->
    <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            DỰ ÁN HOÀN THIỆN
                        </h3>
                        <p class="subtitle-a">

                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-1.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Xem thử</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design by wordpress</span> / <span class="w-date">tháng 6, 2020</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-2.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Loreda Cuno Nere</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-3.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Mavrito Lana Dere</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-4.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Bindo Laro Cado</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-5.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-5.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Studio Lena Mado</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="work-box">
                        <a href="/templates/blog/img/work-6.jpg" data-lightbox="gallery-mf">
                            <div class="work-img">
                                <img src="/templates/blog/img/work-6.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">Studio Big Bang</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <span class="ion-ios-plus-outline"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Section Portfolio End /-->

    <!--/ Section Testimonials Star /-->
    

    <!--/ Section Blog Star /-->
    <section id="blog" class="blog-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Blog
                        </h3>
                        <p class="subtitle-a">
                            Đọc và trải nghiệm cuộc sống của bạn
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="blog-single.php"><img src="/templates/blog/img/post-1.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Travel</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="blog-single.php">XEM THÊM VỀ DU LỊCH</a></h3>
                            <p class="card-description">
                                ” Kẻ lữ hành giỏi không có lịch trình cố định, và cũng chẳng có ý định cập bến.” 
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="/templates/blog/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                    <span class="author">Ngọc Nhân</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 min
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="blog-single.php"><img src="/templates/blog/img/post-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Cooking</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="blog-single.php">XEM THÊM VỀ NẤU ĂN</a></h3>
                            <p class="card-description">
                                "Muốn nấu ăn ngon thì các bạn phải biết ăn ngon. Có những người nấu rất đẹp nhưng ăn không hợp khẩu vị. Cái đó là cái đẹp không đủ."
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="/templates/blog/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                    <span class="author">Ngọc Nhân</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 min
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                            <a href="blog-single.php"><img src="/templates/blog/img/post-3.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                    <h6 class="category">Technology</h6>
                                </div>
                            </div>
                            <h3 class="card-title"><a href="blog-single.php">XEM THÊM VỀ TIN CÔNG NGHỆ</a></h3>
                            <p class="card-description">
                                "Công nghệ là thứ gần gũi nhất với ma thuật còn tồn tại trên thế giới này."
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="post-author">
                                <a href="#">
                                    <img src="/templates/blog/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                    <span class="author">Ngọc nhân</span>
                                </a>
                            </div>
                            <div class="post-date">
                                <span class="ion-ios-clock-outline"></span> 10 min
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Section Blog End /-->

    <!--/ Section Contact-Footer Star /-->
    <?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/blog/inc/footer.php'; ?> 

    