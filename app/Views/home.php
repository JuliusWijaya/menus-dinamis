<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center fixed-left">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:contact@example.com">contact@mantappucorp.com</a>
                </i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 2205 0432 1534</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url(assets/img/slide/1.jpeg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Mantappu <span>Corp</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/2.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated fanimate__adeInDown">Nihongo <span>Mantappu</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(assets/img/slide/3.jpg)">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Mantapp <span>Djiwa</span></h2>
                                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                    aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                    mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                    vel. Minus et tempore modi architecto.</p>
                                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= Featured Section ======= -->
        <section id="featured" class="featured">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h3><a href="">Sed ut perspiciatis</a></h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Featured Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title">
                    <h2>Trusted By</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur consectetur facere sequi
                        rerum illo culpa velit commodi eveniet a ex ab dolorem veritatis, perspiciatis neque aperiam
                        natus unde error necessitatibus repellat soluta quia ea. Itaque.
                    </p>
                </div>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-6.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-7.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-8.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-9.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-10.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-11.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-12.png.webp"
                                class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide"><img
                                src="https://www.mantappu.com/wp-content/uploads/2022/09/LogoSC-39.png.webp"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Clients Section -->
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <?= $this->endSection(); ?>