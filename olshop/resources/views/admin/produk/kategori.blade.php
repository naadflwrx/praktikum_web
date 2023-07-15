@extends('admin.layout.app')
@section('content')

    <!-- ini content halaman dashboard -->
    <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kategori Produk</li>
                        </ol>
                          <div class="card mb-4">
                          <div class="card-header">
                                <a href="{{ url ('admin/kategori/create') }}" class="btn btn-primary">Tambah Kategori</a>
                            </div>

                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Kategori Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($kategori as $value)
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $value->nama }}</td>
                                            <td><a href="{{ url('admin/kategori/edit/'. $value->id) }}" class="btn btn-success">Edit</a></td>
                                            <td><a href="{{ url('admin/kategori/delete/'. $value->id) }}" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        @php
                                            $no++
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection