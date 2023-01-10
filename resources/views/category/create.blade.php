@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Tambah Kategori</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <input type="text" name="namacategory" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
