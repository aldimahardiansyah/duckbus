@extends('main')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img') }}/bus.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Tentang Kami <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Tentang Kami</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('img') }}/bus.jpg);">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">Tentang Kami</span>
                        <h2 class="mb-4">Welcome to Duckbus</h2>

                        <p>Duckbus adalah solusi unggulan untuk kebutuhan penyewaan bus Anda. Kami berdedikasi untuk menyediakan layanan yang nyaman, aman, dan terpercaya bagi setiap pelanggan.</p>
                        <p>Dengan armada bus yang terawat dengan baik dan dilengkapi fasilitas modern, Duckbus siap menemani perjalanan Anda, baik untuk wisata, acara perusahaan, maupun kebutuhan transportasi lainnya. Kami percaya bahwa kepuasan pelanggan adalah prioritas utama, sehingga kami selalu berusaha memberikan pelayanan terbaik dengan harga yang
                            kompetitif. Duckbus, pilihan tepat untuk perjalanan Anda yang menyenangkan dan bebas dari kekhawatiran.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Cari Bus</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Layanan</span>
                    <h2 class="mb-3">Layanan Terbaru Kami</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Wedding Ceremony</h3>
                            <p>Duckbus menyediakan layanan transportasi eksklusif untuk mengantar rombongan pengantin. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">School Tour</h3>
                            <p>Layanan tur sekolah kami dirancang khusus untuk memberikan kenyamanan dan keamanan bagi para siswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Airport Transfer</h3>
                            <p>Kami memastikan perjalanan Anda ke dan dari bandara berjalan lancar tanpa kendala. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="services services-2 w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                        <div class="text w-100">
                            <h3 class="heading mb-2">Whole City Tour</h3>
                            <p>Jelajahi keindahan kota dengan Duckbus. Kami menyediakan transportasi yang nyaman untuk mengunjungi berbagai destinasi menarik. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="5">0</strong>
                            <span>Year <br>Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="{{ count($buses) }}">0</strong>
                            <span>Total <br>Bus</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="143">0</strong>
                            <span>Happy <br>Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="7">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
