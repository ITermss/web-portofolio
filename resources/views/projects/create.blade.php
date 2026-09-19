@extends('layouts.app')

@section('title', 'Tambah Project')

@section('content')

<div class="container mt-4">

    <h1>Tambah Project</h1>

    <form action="{{ route('projects.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Project</label>
            <input
                type="text"
                name="judul"
                class="form-control"
                value="{{ old('judul') }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea
                name="deskripsi"
                class="form-control"
                rows="4"
                required>{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Technology</label>
            <input
                type="text"
                name="teknologi"
                class="form-control"
                value="{{ old('teknologi') }}"
                placeholder="Laravel, MySQL, Bootstrap"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Link Project</label>
            <input
                type="url"
                name="link"
                class="form-control"
                value="{{ old('link') }}"
                placeholder="https://github.com/...">
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="{{ route('projects.index') }}"
           class="btn btn-secondary">
            Batal
        </a>

    </form>

</div>

@endsection