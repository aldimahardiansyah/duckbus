@extends('main')
@section('content')
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('img/main-hero.jpg') }}');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                <div class="col-lg-8 ftco-animate">
                    <div class="text w-100 text-center mb-md-5 pb-md-5">
                        <h1 class="mb-4">Sewa Bus Mudah, Aman & Terpercaya</h1>
                        <p style="font-size: 18px;">Solusi Terbaik untuk Penyewaan Bus Anda. Kami menawarkan layanan sewa bus yang nyaman, aman, dan terpercaya untuk setiap perjalanan Anda.</p>
                        <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Langkah-langkah sewa bus Duckbus</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center">
                            <form action="/rental" method="POST" class="request-form ftco-animate bg-primary">
                                @csrf
                                <h2>Reservasi bus</h2>

                                {{-- catch error validation & success message --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="" class="label">Bus</label>
                                    <select name="bus_id" id="bus_id" class="form-control">
                                        <option value="">Pilih Bus</option>
                                        @foreach ($buses as $bus)
                                            <option value="{{ $bus->id }}">{{ $bus->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Lokasi Pick-up</label>
                                    <input type="text" class="form-control" name="pickup_location" placeholder="Bandara, Stasiun, dll." value="{{ old('pickup_location') }}">
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Destinasi</label>
                                    <input type="text" class="form-control" name="destination" placeholder="Bandara, Stasiun, dll." value="{{ old('destination') }}">
                                </div>
                                <div class="d-flex">
                                    <div class="form-group mr-2">
                                        <label for="" class="label">Tanggal Pick-up</label>
                                        <input type="text" class="form-control" name="start_date" id="book_pick_date" placeholder="Date" value="{{ old('start_date') }}">
                                    </div>
                                    <div class="form-group ml-2">
                                        <label for="" class="label">Tanggal Drop-off</label>
                                        <input type="text" class="form-control" name="end_date" id="book_off_date" placeholder="Date" value="{{ old('end_date') }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="label">Waku Pick-up</label>
                                    <input type="time" class="form-control" name="pickup_time" placeholder="Time" value="{{ old('pickup_time') }}">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Sewa Bus Sekarang" class="btn btn-secondary py-3 px-4">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 d-flex align-items-center">
                            <div class="services-wrap rounded-right w-100">
                                <h3 class="heading-section mb-4">Cara Mudah Menyewa Bus di Duckbus</h3>
                                <div class="row d-flex mb-4">
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Tentukan Lokasi Pick-up</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Pilih Bus Terbaik Anda</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                        <div class="services w-100 text-center">
                                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                                            <div class="text w-100">
                                                <h3 class="heading mb-2">Reservasi Penyewaan Bus</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#" class="btn btn-primary py-3 px-4">Reservasi Sekarang</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Bus Unggulan</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-car owl-carousel">
                        @foreach ($buses as $bus)
                            <div class="item">
                                <div class="car-wrap rounded ftco-animate">
                                    <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset('storage/' . $bus->image) }});">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">{{ $bus->name }}</a></h2>
                                        <div class="d-flex mb-3">
                                            <span class="cat"><span class="flaticon-car-seat"></span> {{ $bus->capacity }} kursi</span>
                                            <p class="price ml-auto">Rp{{ number_format($bus->price_per_day) }} <span>/hari</span></p>
                                        </div>
                                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="/bus/{{ $bus->id }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
