<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(/templates/blog/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            GỬI TIN NHẮN CHO CHÚNG TÔI
                                        </h5>
                                    </div>
                                    <div>
                                        <?php
                                            $msg= '';

                                            if(isset($_POST['submit'])){ 

                                                $name = $_POST['name'];
                                                $email = $_POST['email'];
                                                $message = $_POST['message'];
                                                $sqlAddCmt = "INSERT INTO comment(name,email,cmt) VALUES ('{$name}','{$email}','{$message}')";
                                                $resultAddCmt=$mysqli->query($sqlAddCmt); 
                                                if($resultAddCmt==true){
                                                    $msg = 'Success';
                                                }else{
                                                    $msg = 'Fail';
                                                }
                                                }     
                                        ?>
                                      
                                        <form action="" method="post" role="form" class="contactForm">
                                            <div id="sendmessage">Your message has been sent</div> 
                                            <div id="errormessage"></div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"  placeholder="Your Name" data-msg="Please enter at least 4 chars" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email" placeholder="Your Email"  data-msg="Please enter a valid email" />
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5"  data-msg="Please write something for us" placeholder="Message"></textarea>
                                                        <div class="validation"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="button button-a button-big button-rouded">Gửi</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            LIÊN HỆ
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="ion-ios-location"></span>08 HÀ VĂN TÍNH</li>
                                            <li><span class="ion-ios-telephone"></span> 0981054006</li>
                                            <li><span class="ion-email"></span> nguyenngocnhan2512@gmail.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href="https://www.facebook.com/profile.php?id=100040897753411"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright-box">
                            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                            <div class="credits">
                                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>.                                                
    <!--/ Section Contact-footer End /-->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="/templates/blog/lib/jquery/jquery.min.js"></script>
    <script src="/templates/blog/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/templates/blog/lib/popper/popper.min.js"></script>
    <script src="/templates/blog/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/templates/blog/lib/easing/easing.min.js"></script>
    <script src="/templates/blog/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="/templates/blog/lib/counterup/jquery.counterup.js"></script>
    <script src="/templates/blog/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/templates/blog/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/templates/blog/lib/typed/typed.min.js"></script>
    <!-- Contact Form JavaScript File -->
    

    <!-- Template Main Javascript File -->
    <script src="/templates/blog/js/main.js"></script>

</body>

</html>
