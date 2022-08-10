

<!--====== SLIDER PART START ======-->

<section id="home" class="slider-area pt-100">
    <div class="container-fluid position-relative">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center ">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="/assets/programer.png" alt="Slider">
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h5 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Programer</h5>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Persiapkan kemampuan untuk menjadi programer profesional <br> yang siap bersaing didunia kerja.</p>
                                <a class="main-btn text-decoration-none" href="#kursus" data-animation="fadeInUp" data-delay="1.5s">Jelajahi Sekarang<i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/datascient.png" alt="Slider">
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Data Scientist</h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Belajar menjadi Data Scientist dari nol hingga <br> menjadi seorang profesional.</p>
                                    <a class="main-btn text-decoration-none" href="#kursus" data-animation="fadeInUp" data-delay="1.5s">Jelajahi Sekarang<i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/desain.png" alt="Slider">
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s">Graphic Design</h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Menjadi Graphic Design yang mampu menghasilkan<br> karya yang berkualitas.</p>
                                    <a class="main-btn text-decoration-none" href="#kursus" data-animation="fadeInUp" data-delay="1.5s">Jelajahi Sekarang<i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- slider active -->
        <div class="slider-social">
            <div class="row justify-content-end">
                <div class="col-lg-7 col-md-6">
                    <ul class="social text-right">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- container fluid -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== DISCOUNT PRODUCT PART START ======-->

<section id="kursus" class="discount-product pt-100">
    <div class="container">
        <div class="row">
            @foreach ($scheme as $scheme )
            <div class="card border-0" style="width: 18rem;">
                <a href="{{('skemakursus')}}/{{$scheme->id}}" class="product-img">
                <img class="img-fluid" src="gambar/{{$scheme->gambar}} " alt="Skema">
                </a>
                <div class="card-body">
                  <p class="card text-center font-weight-bold">{{$scheme->nama}}</p>
                </div>
              </div>
            @endforeach
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DISCOUNT PRODUCT PART ENDS ======-->



<!--====== FOOTER PART START ======-->

<section id="footer" class="footer-area">
    <div class="container">
        <div class="footer-widget pt-75 pb-120">
            <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-7">
                    <div class="footer-logo mt-40">
                        <a href="#">
                            <img src="user/assets/images/logo.png" alt="Logo">
                        </a>
                        <p class="mt-10">Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit.</p>
                        <ul class="footer-social mt-25">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer logo -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-link mt-50">
                        <h5 class="f-title">Services</h5>
                        <ul>
                            <li><a href="#">Architechture Design</a></li>
                            <li><a href="#">Interior Design</a></li>
                            <li><a href="#">Autocad Services</a></li>
                            <li><a href="#">Lighting Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer-link mt-50">
                        <h5 class="f-title">Help</h5>
                        <ul>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
                <div class="col-lg-4 col-md-5 col-sm-7">
                    <div class="footer-info mt-50">
                        <h5 class="f-title">Contact Info</h5>
                        <ul>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Phone :</span>
                                    <div class="footer-info-content">
                                        <p>+88123 4567 890</p>
                                        <p>+88123 4567 890</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Email :</span>
                                    <div class="footer-info-content">
                                        <p>contact@yourmail.com</p>
                                        <p>support@yourmail.com</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                            <li>
                                <div class="single-footer-info mt-20">
                                    <span>Address :</span>
                                    <div class="footer-info-content">
                                        <p>5078 Jensen Key, Port Kaya, WV 73505</p>
                                    </div>
                                </div> <!-- single footer info -->
                            </li>
                        </ul>
                    </div> <!-- footer link -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="footer-copyright pt-15 pb-15">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <p>Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                    </div> <!-- copyright -->
                </div>
            </div> <!-- row -->
        </div> <!--  footer copyright -->
    </div> <!-- container -->
</section>


<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

