@extends('layouts.layout')

@section('charles-content')
    @include('our-service.partials._baniere')


    <div class="site-section services-1-wrap">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-7">
                    <h3 class="section-subtitle">Services</h3>
                    <h2 class="section-title mb-4 text-black">Providing Fresh Produce Every Single Day</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">01</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-1.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Planting</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">02</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-2.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Mulching</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">03</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-3.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Plowing</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">04</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-4.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Mowing</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">05</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-5.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Seeding</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">06</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-6.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Fresh Vegetables</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">07</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-7.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Watering</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-1">
                        <span class="number">08</span>
                        <div class="service-1-icon">
                            <img src="{{ asset('template/images/icon-8.png') }}" alt="Image" class="img-fluid">
                        </div>
                        <div class="service-1-content">
                            <h3 class="service-heading">Vegetable selling</h3>
                            <p>Gravida sodales condimentum pellen tesq accumsan orci quam sagittis sapie</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
