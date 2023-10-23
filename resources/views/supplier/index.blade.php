@extends('layout.be.template')
@section('title', 'Data Suppplier ')

@section('content')
    <div class="container px-4 mt-4">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('supplier-create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data
                </a>
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center"><strong>Data Supplier</strong></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center">
                                    <th>No</th>
                                    <th>Nama PT</th>
                                    <th>Nama Ketua</th>
                                    <th>Nomor Kontak</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr style="text-align: center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->nama_pt }}</td>
                                        <td>{{ $row->nama_ketua }}</td>
                                        <td>{{ $row->nomor_kontak }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->created_at }}</td>
                                        <td> Update | Delete </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
