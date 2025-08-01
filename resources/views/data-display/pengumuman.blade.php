@extends('template/main')

@php
    $hideFooter = true;
@endphp

@section('menu-sidebar')
    @include('template/sidebar')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="card shadow-lg border-0 mt-5">
            <div class="card-header bg-secondary text-white">
                <h2 class="text-center mb-0">Daftar {{ $title }}</h2>
            </div>
            <div class="card-body bg-dark d-flex justify-content-start m-0">
                <a href="/kelola/tambah-pengumuman" class="btn btn-success shadow-sm">
                    <i class="bi bi-plus-circle"></i> Tambah {{ $title }}
                </a>
            </div>
            <div class="card-body bg-light p-0">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead class="table-secondary">
                            <tr>
                                <th class="text-center align-middle">No</th>
                                <th class="text-center align-middle">Judul Pengumuman</th>
                                <th class="text-center align-middle">Isi Pengumuman</th>
                                <th class="text-center align-middle">Slug</th>
                                <th class="text-center align-middle">Tanggal Terbit</th>
                                <th class="text-center align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengumuman as $index => $row)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $row->judul_pengumuman }}</td>
                                    <td class="text-center align-middle">{{ $row->isi_pengumuman }}</td>
                                    <td class="text-center align-middle">{{ $row->slug }}</td>
                                    <td class="text-center align-middle">{{ \Carbon\Carbon::parse($row->tanggal_terbit)->format('d-m-Y') }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="/kelola/edit-pengumuman/{{ $row->id_pengumuman}}" class="btn btn-sm btn-warning text-dark m-1">
                                            <i class="bi bi-pencil"></i> Edit
                                        </a>
                                        <a href="/kelola/delete-pengumuman/{{ $row->id_pengumuman }}" class="btn btn-sm btn-danger text-dark m-1"
                                            onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="bi bi-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">Tidak ada {{ $title }}.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
