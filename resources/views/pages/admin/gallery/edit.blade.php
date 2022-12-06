@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Foto Paket Travel {{ $item->title }}</h1>
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
                <form action="{{ route('gallery.update', $item->id) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title" class="form-control-label">Nama Paket Travel</label>
                        <select name="travel_package_id" class="form-control" disabled>
                            <option value="{{ $item->travel_package_id }}">Pilih Travel</option>
                            @foreach ($travel_packages as $travel_package)
                                <option value="{{ $travel_package->id }}" {{ $item->travel_package_id == $travel_package->id ? 'selected' : '' }}>{{ $travel_package->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image" class="form-control-label">Foto</label>
                        <input type="file" name="image" value="{{ old('image') }}"
                    accept="image/*" class="form-control" required>
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
