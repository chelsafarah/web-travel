@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
        </div>

        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Travel</th>
                                <th>User</th>
                                <th>Visa</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <th>{{ $item->id }}</th>
                                    <th>{{ $item->travel_package->title }}</th>
                                    <th>{{ $item->user->name }}</th>
                                    <th>{{ $item->additional_visa }}</th>
                                    <th>{{ $item->transaction_total}}</th>
                                    <th>{{ $item->transaction_status}}</th>
                                    <th>
                                        <a href="{{ route('transaction.show', $item->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('transaction.edit', $item->id) }}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                                                <form action="{{ route('transaction.destroy', $item->id) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>
                                    </th>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
