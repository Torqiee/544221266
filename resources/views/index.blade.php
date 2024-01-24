@extends('layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Perpustakaan Buku SMK Telkom Makassar</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/buku/create') }}" class="btn btn-primary btn-md" title="Add New Student">
                            + Tambahkan Buku Baru
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Nama Penulis</th>
                                        <th>Jumlah Halaman</th>
                                        <th>Harga Buku</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($buku as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->judul_buku }}</td>
                                        <td>{{ $item->tanggal_terbit }}</td>
                                        <td>{{ $item->nama_penulis }}</td>
                                        <td>{{ $item->jumlah_halaman }}</td>
                                        <td>{{ $item->harga_buku }}</td>

                                        <td>
                                            <a href="{{ url('/buku/' . $item->id) }}" title="View Buku"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View Buku</button></a>
                                            <a href="{{ url('/buku/' . $item->id . '/edit') }}" title="Edit Buku"><button class="btn btn-secondary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Buku</button></a>

                                            <form method="POST" action="{{ url('/buku' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Buku" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
