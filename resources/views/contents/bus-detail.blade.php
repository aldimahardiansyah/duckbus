@extends('main')
@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('img') }}/bus.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Bus <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Detail Bus</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="car-details">
                        <div class="img rounded" style="background-image: url({{ asset('storage/' . $bus->image ?? '') }});"></div>
                        <div class="text text-center">
                            <span class="subheading">Rp {{ number_format($bus->price_per_day) }} /hari</span>
                            <h2>{{ $bus->name ?? '' }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Transmission
                                                <span>{{ $bus->transmission ?? '-' }}</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Seats
                                                <span>{{ $bus->capacity ?? '-' }}</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services">
                                <div class="media-body py-md-4">
                                    <div class="d-flex mb-3 align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
                                        <div class="text">
                                            <h3 class="heading mb-0 pl-3">
                                                Fuel
                                                <span>{{ $bus->fuel_type }}</span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 pills">
                            <div class="bd-example bd-example-tabs">
                                <div class="d-flex justify-content-center">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Fasilitas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                        <div class="row">
                                            @foreach ($bus->facilities as $facility)
                                                <div class="col-md-4">
                                                    <ul class="features">
                                                        <li class="check"><span class="ion-ios-checkmark"></span>{{ $facility->name }}</li>
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                        <p>{{ $bus->description ?? '-' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="d-flex align-items-center">
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
                                <input type="hidden" name="bus_id" value="{{ $bus->id }}">
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
                                    <input type="date" class="form-control" name="start_date" placeholder="Date" value="{{ old('start_date') }}">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Tanggal Drop-off</label>
                                    <input type="date" class="form-control" name="end_date" placeholder="Date" value="{{ old('end_date') }}">
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
                </div>
            </div>
        </div>
    </section>
@endsection
