@extends('layout')
@section('content')

<div class="card" style="margin: 20px">
    <div class="card-header">Registrasi Buku Baru</div>
    <div class="card-body">

        <form action="{{ url('buku') }}" method="post">
            {!!  csrf_field() !!}
            <label>Judul Buku</label></br>
            <input type="text" name="judul_buku" id="judul_buku" class="form-control"></br>
            <label>Tanggal Terbit</label></br>
            <input type="date" name="tanggal_terbit" id="tanggal_terbit" class="form-control"></br>
            <label>Nama Penulis</label></br>
            <input type="text" name="nama_penulis" id="nama_penulis" class="form-control"></br>
            <label>Jumlah Halaman</label></br>
            <input type="number" name="jumlah_halaman" id="jumlah_halaman" class="form-control"></br>
            <label>Harga Buku</label></br>
            <input type="number" name="harga_buku" id="harga_buku" class="form-control"></br>

            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop
