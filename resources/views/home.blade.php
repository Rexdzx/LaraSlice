<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing</title>

    <link rel="icon" href="{{ asset('img/logosm.png') }}">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/aos/aos.css">
    <link rel="stylesheet" href="vendor/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css'>
</head>

<body>
    <header id="header" class="header fixed-top sticked" scrollto-offset="0" style="display: block;">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
                <img src="img/smrt.png" alt="">
            </a>

            <nav id="navbar" class="navbar navbar-expand-lg">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portofolio</a></li>
                    <li><a class="nav-link scrollto" href="#partner">Partner</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="90"
                    data-aos-duration="900">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <h2 class="py-4">Every day brings with it a fresh set of learning possibilities.</h2>
                    <div class="buttons">
                        <a href="#" class="btn-get-started scrollto">Get Started</a>
                        <a href="#" class="btn-learn-more scrollto">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img mt-4"
                    style="display: flex; align-items: center; justify-content: center;" data-aos="fade-left">
                    <img src="img/img.png" class="img-fluid" alt="" style="max-width: 90%;">
                </div>
            </div>
        </div>

    </section>

    <main id="main">
        <section id="about" class="about">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 col-md-6 d-flex align-items-center">
                        <div class="img">
                            <img src="img/about.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 content d-flex flex-column justify-content-center position-relative">
                        <h4>Tentang Kami</h4>
                        <p>Lorem adalah institusi pendidikan terkemuka yang ditempatkan dengan bangga di Kota Medan,
                            Sumatera Utara. Di sini, kami merasa sangat bersyukur karena telah mampu menciptakan
                            generasi penerus yang memiliki potensi luar biasa untuk menjadi pemimpin masa depan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio">
            <div class="head mb-5">
                <h4>Portfolio</h4>
            </div>
            <div class="row">
                <div class="swiper-container d-flex justify-content-center align-items-center py-5 ">
                    <div class="swiper-wrapper d-flex align-items-center">
                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="img/avatar.jpg" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tux</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="img/robt.jpg" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 1</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class=" info d-flex py-3" style="margin-left: 46px;">
                                    <img src="img/avatar.jpg" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="img/robt.jpg" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 2</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="img/avatar.jpg" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="img/robt.jpg" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 3</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="img/avatar.jpg" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="img/robt.jpg" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 3</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>

        <section id="partner" class="partner">
            <div class="head">
                <h4>Partner</h4>
            </div>
            <div class="container">
                <div class="row g-5 py-5">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img class="img-fluid" src="img/partner1.png" alt="monk-studio">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img class="img-fluid" src="img/partner2.png" alt="les-copaque">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img class="img-fluid" src="img/partner3.png" alt="fly-studio">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-md-8">
                        <div class="footer-info d-flex">
                            <img class="" src="img/logosm.png" alt="">
                            <h3>SMK SWASTA SMART</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-end">
                        <h4>Lorem ipsum dolor sit amet</h4>
                    </div>
                </div>
                <div class="row pb-4 d-flex justify-content-end">
                    <div class="col-lg-4">
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h5>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-auto me-auto">
                        <p class="ms-lg-5 ms-md-0 ms-sm-0 ms-0 fs-6 text-center text-md-start">© 2023 All Rights
                            Reserved</p>
                    </div>
                    <div class="col-auto">
                        <div class="social-links text-center text-md-end">
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        function aos_init() {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false,
            })
        }

        window.addEventListener('load', () => {
            aos_init();
        })

        const mobileNavToogle = document.querySelector('.mobile-nav-toggle');
        if (mobileNavToogle) {
            mobileNavToogle.addEventListener('click', function(event) {
                event.preventDefault();

                document.querySelector('body').classList.toggle('mobile-nav-active');

                this.classList.toggle('bi-list');
                this.classList.toggle('bi-x');
            });
        };

        var mySwiper = new Swiper('.swiper-container', {
            speed: 400,
            spaceBetween: 100,
            initialSlide: 1,
            //truewrapper adoptsheight of active slide
            autoHeight: false,
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            autoplayStopOnLast: true, // loop false also

            // Navigation arrows
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',

            // And if we need scrollbar
            //scrollbar: '.swiper-scrollbar',
            // "slide", "fade", "cube", "coverflow" or "flip"
            effect: 'slide',
            // Distance between slides in px.
            spaceBetween: 120,
            //
            slidesPerView: 2,
            //
            centeredSlides: true,

            breakpoints: {
                768: {
                    slidesPerView: 1,
                    centeredSlides: true,
                },

                992: {
                    slidesPerView: 1,
                    centeredSlides: true,
                }
            },
            //
            slidesOffsetBefore: 0,
            //
            grabCursor: true,
        });
    });
</script>
<script src="vendor/aos/aos.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</html>
