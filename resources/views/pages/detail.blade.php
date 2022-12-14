@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>

                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $travel->title }}</h1>
                            <p>
                                {{ $travel->location }}
                            </p>
                            @if ($travel->galleries->count())
                                <div class="gallery">
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($travel->galleries->first()->image) }}" alt="" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($travel->galleries->first()->image) }}">
                                    </div>
                                    <div class="xzoom-thumbs">
                                        @foreach ($travel->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}" >
                                                <img src="{{ Storage::url($gallery->image) }}"  alt="" class="xzoom-gallery" xpreview="{{ Storage::url($gallery->image) }}"/>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                <div class="gallery">
                                    <div class="container" style="margin-bottom: 20px;">
                                        <img src="{{ url('backend/img/default-img.png') }}" alt="">
                                    </div>
                                </div>
                            @endif

                            <h2>Tentang Wisata</h2>
                            <p style="text-align: justify">
                                {{ $travel->about }}
                            </p>
                            <div class="features row">
                                <div class="col-md-4 border-end">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>{{ $travel->featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-end">
                                    <img src="{{ url('frontend/images/ic_language.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $travel->language }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $travel->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="{{ url('frontend/images/member1.jpg') }}" alt="" class="member-image rounded-circle me-1">
                                <img src="{{ url('frontend/images/member2.jpg') }}" alt="" class="member-image rounded-circle me-1">
                                <img src="{{ url('frontend/images/member3.jpg') }}" alt="" class="member-image rounded-circle me-1">
                                <img src="{{ url('frontend/images/member4.jpg') }}" alt="" class="member-image rounded-circle me-1">
                                <img src="{{ url('frontend/images/member5.png') }}" alt="" class="member-image rounded-circle me-1">
                            </div>
                            <hr>
                            <h2>Trip Informations</h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-end">{{ \Carbon\Carbon::create($travel->departure_date)->format('F n, Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-end">{{ $travel->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-end">{{ $travel->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-end">${{ $travel->price }},00 / person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container d-grid gap-2">
                            @auth
                                <form action="{{ route('checkout-process', $travel->id) }}" method="POST">
                                    @csrf
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-join-now mt-3 py-2" type="submit">Join Now</button>
                                    </div>
                                </form>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-join-now mt-3 py-2">Login or Register to Join</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('before-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('after-script')
    <script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 100,
                zoomHeight: 100,
                title: false,
                tint: '#333',
                Xoffset: 0
            });
        });
    </script>
@endpush
