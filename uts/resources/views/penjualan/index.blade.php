@extends('layouts.master')
@section('title','Data Penjualan')
@section('judul','Data Penjualan')
@section('nama','Usaha Gas Mandiri')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="card-header">
        <a href="/penjualan/form/" class="btn btn-primary"> <i class="fa fa-plus"></i>Tambah data </a>
       </div>
       <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penjualan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nomor Faktur</th>
                            <th>Nama Barang</th>
                            <th>Tanggal Penjualan</th>
                            <th>Harga Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pen as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->nofak}}</td>
                        <td>{{$item->nm_brg}}</td>
                        <td>{{$item->tgl}}</td>
                        <td>{{$item->harga}}</td>
                        <td>{{$item->jum}}</td>
                        <td>
                            <a href="/penjualan/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pen"></i></a>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                <i class="fa fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Yakin ingin menghapus data Penjualan <b>{{$item->nofak}}</b>?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <form action="/penjualan/{{$item->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </form>

                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tidak Ada Data</td>
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