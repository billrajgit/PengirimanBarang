@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Produk</h1>
    <hr>
    <form action="{{ isset($produk)
                        ?route("produk.update",$produk)
                        :route("produk.store") }}"
        method="post">
        @isset($produk)
            @method("PUT")
        @endisset
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama"
                value="{{ isset($produk)?$produk->nama:"" }}">
        </div>
        <div class="form-group float-right">
            <input type="submit" value="Simpan" class="btn btn-success">
        </div>
    </form>
</div>
@endsection