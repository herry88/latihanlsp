@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Tambah Data</div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" name="namaproduct" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->namacategory}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Qty</label>
                                <input type="text" name="qty" class="form-control">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
