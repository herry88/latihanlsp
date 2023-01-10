@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Category
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <thead>
                                    <th>#</th>
                                    <th>Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th>Tools</th>
                                </thead>
                            </tr>
                            <tr>
                                <tbody>
                                    <tr>
                                        @forelse ($category as $ct)
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->namacategory }}</td>
                                            <td>{{ $ct->deskripsi }}</td>
                                            <td>&nbsp;</td>
                                        @empty
                                            <td colspan="4" class="text-center">Belum Ada Data</td>
                                        @endforelse
                                    </tr>
                                </tbody>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
