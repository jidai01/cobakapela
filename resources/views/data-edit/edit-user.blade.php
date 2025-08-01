@extends('template/main')

@php
    $hideFooter = true;
@endphp

@section('menu-sidebar')
    @include('template/sidebar')
@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-start mt-5 my-2" style="min-height: 100vh;">
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

            <form action="{{ url('/kelola/update-user') }}" method="POST">
                @csrf

                <div class="mb-1">
                    <label class="form-label"><span class="text-danger">*</span><em class="text-muted"> (data wajib diisi)</em></label>
                </div>

                <input type="hidden" name="id_user" value="{{ $user->id_user }}">

                <div class="mb-3">
                    <label for="name" class="form-label">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <small class="text-muted">Kosongkan jika tidak ingin mengubah password</small>
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" id="showPassword"
                            onclick="document.getElementById('password').type = this.checked ? 'text' : 'password'">
                        <label class="form-check-label" for="showPassword">Tampilkan Password</label>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="role" class="form-label">Peran<span class="text-danger">*</span></label>
                    <select class="form-select" id="role" name="role" required>
                        <option value="">-- Pilih Peran --</option>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="ketua" {{ old('role', $user->role) == 'ketua' ? 'selected' : '' }}>Ketua</option>
                        <option value="humas" {{ old('role', $user->role) == 'humas' ? 'selected' : '' }}>Humas</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-dark w-100 mb-2"><i class="bi bi-save"></i> Simpan Perubahan</button>
                <a href="{{ url('/kelola/data-user') }}" class="btn btn-outline-secondary w-100"><i class="bi bi-arrow-return-left"></i> Kembali</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet">
    <script>
        new TomSelect("#role", {
            create: false,
            placeholder: "-- Pilih Peran --",
            allowEmptyOption: false
        });
    </script>
@endsection
