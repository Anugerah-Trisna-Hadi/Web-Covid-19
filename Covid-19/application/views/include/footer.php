
<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Patner Kita
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/brands/rpl_1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/brands/b2.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/logo-dark.png" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/brands/rpl_1.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/brands/b2.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="<?= base_url('assets/evento'); ?>/assets/img/logo-dark.png" alt="brand">
            </div>
        </div>
    </div>
</section>
<!--brands section end-->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('<?= base_url('assets/evento'); ?>/assets/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                Berikan Aksimu
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                #TetapDiRumah #JagaJarakAman #PSBB #JagaKebersihan
            </div>
            <div class="col-md-3 text-md-right text-center">
                <!-- <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a> -->
            </div>
        </div>
    </div>
</section>
<!--get tickets section end -->

<!--footer start -->
<footer>
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            COVID 19
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <p>
                            Indonesia adalah salah satu negara yang terkena virus corona dan menjalankan lockdown. Beberapa wilayah di Indonesia telah melayangkan aturan PSBB (Pembatasan Sosial Berskala Besar).
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="mailto:"><i class="ion-ios-email"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=&text=Hi!%20I%20Will%20to%20be%20your%20patnership."><i class="ion-social-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com//?hl=id"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            subscribe to our newsletter
                        </h4>
                    </div>
                    <form class="form" action="<?= base_url('index.php/covid_19/subscribe'); ?>" method="post">
                        <div class="footer_box_body">
                            <div class="newsletter_form">
                                <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail here">
                                <button type="submit" class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                <div class="col-12 col-md-6 ">
                    <ul class="footer_menu">
                    <!-- <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->
<script type="text/javascript" src="<?= base_url('assets'); ?>/datatables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets'); ?>/DataTables/js/jquery.dataTables.min.js"></script>

<!-- jquery -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/popper.js"></script>
<script src="<?= base_url('assets/evento'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/evento'); ?>/assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="<?= base_url('assets/evento'); ?>/assets/js/main.js"></script>
</body>
</html>