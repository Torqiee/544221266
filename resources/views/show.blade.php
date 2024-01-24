@extends('layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Detail Buku</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Judul Buku : {{ $buku->judul_buku }}</h5>
        <p class="card-text">Tanggal Terbit : {{ $buku->tanggal_terbit }}</p>
        <p class="card-text">Nama Penulis : {{ $buku->nama_penulis }}</p>
        <p class="card-text">Jumlah Halaman : {{ $buku->jumlah_halaman }}</p>
        <p class="card-text">Harga Buku : {{ $buku->harga_buku }}</p>
  </div>
    </hr>
  </div>
</div>
