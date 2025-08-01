@extends('template/main')

@php
    $hideFooter = true;
@endphp

@section('menu-sidebar')
    @include('template/sidebar')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-start mt-5 my-2" style="height: auto !important;">
        <div class="card shadow p-4" style="width: 100%; max-width: 600px;">
            <h4 class="bg-dark text-light text-center mb-4 p-2 rounded">Form {{ $title }}</h4>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/kelola/kirim-kub" method="post">
                @csrf

                <div class="mb-1">
                    <label class="form-label"><span class="text-danger">*</span><em class="text-muted"> (data wajib diisi)</em></label>
                </div>

                <div class="mb-3">
                    <label for="nama_kub" class="form-label">Nama KUB<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama_kub" name="nama_kub" placeholder="nama kub"
                        required>
                </div>

                <div class="mb-3">
                    <label for="ketua_kub" class="form-label">Ketua KUB</label>
                    <input type="text" class="form-control" id="ketua_kub" name="ketua_kub" placeholder="nama ketua kub">
                </div>

                <div class="mb-3">
                    <label for="id_wilayah" class="form-label">Nama Wilayah<span class="text-danger">*</span></label>
                    <select class="form-control" name="id_wilayah" id="id_wilayah" placeholder="-- Pilih Wilayah --">
                        <option value="">-- Pilih Wilayah --</option>
                        @foreach ($wilayahlist as $wilayah)
                            <option value="{{ $wilayah->id_wilayah }}">{{ $wilayah->nama_wilayah }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="jumlah_anggota" class="form-label">Jumlah Anggota</label>
                    <input type="number" class="form-control" id="jumlah_anggota" name="jumlah_anggota"
                        placeholder="jumlah anggota">
                </div>

                <button type="submit" class="btn btn-dark w-100 mb-2"><i class="bi bi-save"></i>
                    {{ $title }}</button>
                <a href="/kelola/data-kub" class="btn btn-outline-secondary w-100"><i class="bi bi-arrow-return-left"></i>
                    Kembali</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
    <script>
        new TomSelect("#id_wilayah", {
            create: false,
            sortField: {
                field: "text",
                direction: "asc"
            },
            placeholder: "-- Pilih Wilayah --"
        });
    </script>
@endsection
