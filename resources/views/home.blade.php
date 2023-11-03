@extends('layouts.user.app')

@section('content')
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
                            <img src="{{ asset('img/about.png') }}" alt="" class="img-fluid">
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
                        {{-- <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="img/avatar.jpg" class="rounded-circle" style="width: 60px;" alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tux</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="{{ asset('img/robt.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 1</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class=" info d-flex py-3" style="margin-left: 46px;">
                                    <img src="{{ asset('img/avatar.jpg') }}" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="{{ asset('img/robt.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 2</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="{{ asset('img/avatar.jpg') }}" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="{{ asset('img/robt.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 3</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                            <div class="box-portfolio">
                                <div class="info d-flex py-3" style="margin-left: 46px;">
                                    <img src="{{ asset('img/avatar.jpg') }}" class="rounded-circle" style="width: 60px;"
                                        alt="Avatar" />
                                    <h3 class="align-items-center justify-content-center d-flex ms-2">Tuxxx</h3>
                                </div>
                                <div class="img-portfolio">
                                    <img src="{{ asset('img/robt.jpg') }}" class="img-fluid" alt="">
                                </div>
                                <h3 class="title mt-5"><a href="#">Robot 3</a></h3>
                                <a class="portfolio-btn" href="#">Lihat Profil</a>
                            </div>
                        </div> --}}

                        @foreach ($portfolio as $porto)
                            <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                                <div class="box-portfolio">
                                    <div class="info d-flex py-3" style="margin-left: 46px;">
                                        <img src="{{ $porto->foto }}" class="rounded-circle" style="width: 60px;"
                                            alt="Avatar" />
                                        <h3 class="align-items-center justify-content-center d-flex ms-2">
                                            {{ $porto->nama }}
                                        </h3>
                                    </div>
                                    <div class="img-portfolio">
                                        <img src="{{ $porto->portfolio }}" class="img-fluid" alt="">
                                    </div>
                                    <h3 class="title mt-5"><a href="#">{{ $porto->judul }}</a></h3>
                                    <a class="portfolio-btn" href="#">Lihat Profil</a>
                                </div>
                            </div>
                        @endforeach


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
                        <img class="img-fluid" src="{{ asset('img/partner1.png') }}" alt="monk-studio">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('img/partner2.png') }}" alt="les-copaque">
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <img class="img-fluid" src="{{ asset('img/partner3.png') }}" alt="fly-studio">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
