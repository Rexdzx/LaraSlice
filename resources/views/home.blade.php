@extends('layouts.user.app')

@push('css')
    <style>
        .wrapper {
            display: flex;
            flex-direction: row;

        }

        .wrapper img {
            object-fit: cover;
            width: 245px;
            height: 250px;
            margin-right: -30px
        }

        .gambar1 {
            margin-left: 190px;
            margin-bottom: 0px;
            margin-top: 10px;
            margin-right: -560px;
        }

        .gambar1 img {
            width: 287px;
            height: 258px;
            border-radius: 16px;
        }

        .gambar2 {
            position: relative;
            margin-top: 100px;
        }

        .gambar2 img {
            width: 357px;
            height: 294px;
            border-radius: 10px 50px;
        }

        .gambar3 {
            margin-left: -158px;
            margin-top: 340px;
            z-index: 20;
        }

        .gambar3 img {
            width: 357px;
            height: 294px;
            border-radius: 16px;
        }
    </style>
@endpush

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
                {{-- <div class="row g-5">
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
                </div>  --}}
                @foreach ($abouts as $about)
                    <div class="row g-5">
                        <div class="col-lg-5 col-md-6 d-flex align-items-center">
                            <div class ="wrapper">
                                <div class="gambar1">
                                    <img src="{{ asset('img/upload/about/' . $about->gambar1) }}" alt="">
                                </div>

                                <div class="gambar2">
                                    <img src="{{ asset('img/upload/about/' . $about->gambar2) }}" alt="">
                                </div>

                                <div class="gambar3">
                                    <img src="{{ asset('img/upload/about/' . $about->gambar3) }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 content d-flex flex-column justify-content-center position-relative">
                            <h4>Tentang Kami</h4>
                            <p>{{ $about->deskripsi }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section id="portfolio" class="portfolio">
            <div class="head mb-5">
                <h4>Portfolio</h4>
            </div>
            <div class="row">
                <div class="swiper-container d-flex justify-content-center align-items-center py-5 ">
                    <div class="swiper-wrapper d-flex align-items-center">

                        @foreach ($portfolio as $porto)
                            <div class="col-lg-4 mt-5 px-5 swiper-slide" data-aos="fade-up" data-aos-delay="600">
                                <div class="box-portfolio">
                                    <div class="info d-flex py-3" style="margin-left: 46px;">
                                        <img src="{{ asset('img/upload/pas_foto/' . $porto->foto) }}" class="rounded-circle"
                                            style="width: 60px; height:60px; object-position:top; object-fit:cover;"
                                            alt="Avatar" />
                                        <h3 class="align-items-center justify-content-center d-flex ms-2">
                                            {{ $porto->nama }}
                                        </h3>
                                    </div>
                                    <div class="img-portfolio">
                                        <img src="{{ asset('img/upload/portfolio/' . $porto->portfolio) }}"
                                            class="img-fluid" alt="">
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
