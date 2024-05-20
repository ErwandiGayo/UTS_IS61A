@extends('layouts.master')

@section('title', 'Edit Penjualan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penjualan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/penjualan/{{$pen->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Faktur</label>
                    <input type="text" value="{{$pen->nofak}}" class="form-control" name="nofak">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" value="{{$pen->nm_brg}}" class="form-control" name="nm_brg">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Penjualan</label>
                    <input type="date" value="{{$pen->tgl}}" class="form-control" name="tgl">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga Barang</label>
                    <input type="text" value="{{$pen->harga}}" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Barang</label>
                    <input type="text" value="{{$pen->jum}}" class="form-control" name="jum">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
