@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><a href="{{ route('product.create') }}" class="btn btn-primary">Add</a></div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>namaproduct</th>
                                    <th>Nama Kategori</th>
                                    <th>qty</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $pr)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pr->namaproduct }}</td>
                                        <td>{{ $pr->namacategories->namacategory }}</td>
                                        <td>{{ $pr->qty }}</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
