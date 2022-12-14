@extends('layouts.app')

@section('title')
NOMADS
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <div class="transbox">
            <h1>
                Explore The Beautiful World <br>
                As Easy One Click
            </h1>
            <p class="mt-3">
                You will see beautiful <br>
                moment you never see before
            </p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
                Get Started
            </a>
        </div>
    </header>

    <!-- Statisctics -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try <br>
                            before in this word
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($travel_package as $travel)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel" style="background-image: url('{{ $travel->galleries->count() ?  Storage::url($travel->galleries->first()->image) : '' }}');">
                                <div class="transbox-travel text-center d-flex flex-column">
                                    <div class="travel-country">
                                        {{ strtoupper($travel->location) }}
                                    </div>
                                    <div class="travel-location">
                                        {{ strtoupper($travel->title) }}
                                    </div>
                                    <div class="travel-button mt-auto">
                                        <a href="{{ route('detail', $travel->slug) }}" class="btn btn-travel-details px-4">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/partner.png') }}" alt="Logo Partner" class="img-partner">
                    </div>
                </div>

            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them <br>
                            the best experience </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimoni1.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Risky</h3>
                                <p class="testimonial">
                                    ??? It was glorious and I could not stop to say wohooo for every single momentDankeeeeee ???
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimoni2.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">
                                    ??? The trip was amazing and I saw something beautiful in that Island that makes me want to learn more ???
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/testimoni3.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Sabrina</h3>
                                <p class="testimonial">
                                    ??? I loved it when the waves was shaking harder ??? I was scared too ???
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Java
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
