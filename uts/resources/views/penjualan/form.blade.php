@extends('layouts.master')
@section('title','Tambah Data Penjualan')
@section('judul','Tambah Data Penjualan')
@section('nama','Usaha Gas Mandiri')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/penjualan/store/">
                @csrf
                <div class="form-group">
                    <label for="nofak">Nomor Faktur:</label>
                    <input type="text" class="form-control" id="nofak" name="nofak">
                </div>
                <div class="form-group">
                    <label for="nm_brg">Nama Barang:</label>
                    <input type="text" class="form-control" id="nm_brg" name="nm_brg">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Penjualan:</label>
                    <input type="date"  class="form-control" id="tgl" name="tgl" rows="3"></input>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Barang:</label>
                    <input type="text" class="form-control" id="harga" name="harga" rows="3"></input>
                </div>
                <div class="form-group">
                    <label for="jum">Jumlah Penjualan:</label>
                    <input type="text" class="form-control" id="jum" name="jum" rows="3"></input>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection