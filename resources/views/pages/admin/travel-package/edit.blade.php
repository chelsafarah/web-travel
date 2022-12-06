@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
            </a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-control-label">Title</label>
                        <input type="text" name="title" value="{{ old('title')? old('title') : $item->title }}" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="location" class="form-control-label">Location</label>
                        <input type="text" name="location" value="{{ old('location')? old('location') : $item->location }}" class="form-control" placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="about" class="form-control-label">About</label>
                        <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{ old('about')? old('about') : $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event" class="form-control-label">Featured Event</label>
                        <input type="text" name="featured_event" value="{{ old('featured_event')? old('featured_event') : $item->featured_event }}" class="form-control" placeholder="Featured Event">
                    </div>
                    <div class="form-group">
                        <label for="language" class="form-control-label">Language</label>
                        <input type="text" name="language" value="{{ old('language')? old('language') : $item->language }}" class="form-control" placeholder="Language">
                    </div>
                    <div class="form-group">
                        <label for="foods" class="form-control-label">Foods</label>
                        <input type="text" name="foods" value="{{ old('foods')? old('foods') : $item->foods }}" class="form-control" placeholder="Foods">
                    </div>
                    <div class="form-group">
                        <label for="departure_date" class="form-control-label">Departure Date</label>
                        <input type="date" name="departure_date" value="{{ old('departure_date')? old('departure_date') : $item->departure_date }}" class="form-control" placeholder="Departure Date">
                    </div>
                    <div class="form-group">
                        <label for="duration" class="form-control-label">Duration</label>
                        <input type="text" name="duration" value="{{ old('duration')? old('duration') : $item->duration }}" class="form-control" placeholder="Duration">
                    </div>
                    <div class="form-group">
                        <label for="type" class="form-control-label">Type</label>
                        <input type="text" name="type" value="{{ old('type')? old('type') : $item->type }}" class="form-control" placeholder="Type">
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-control-label">Price</label>
                        <input type="number" name="price" value="{{ old('price')? old('price') : $item->price }}" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Ubah</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
