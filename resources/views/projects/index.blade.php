@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Project Saya</h1>

        <a href="{{ route('projects.create') }}" class="btn btn-primary">
            Tambah Project
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @forelse($projects as $project)

            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">

                        <h5 class="card-title">
                            {{ $project->judul }}
                        </h5>

                        <p class="card-text">
                            {{ $project->deskripsi }}
                        </p>

                        <p>
                            <strong>Teknologi:</strong>
                            {{ $project->teknologi }}
                        </p>

                        <a href="{{ route('projects.show', $project) }}"
                           class="btn btn-outline-primary">
                            Lihat Detail
                        </a>

                    </div>
                </div>
            </div>

        @empty

            <p>Belum ada project.</p>

        @endforelse
    </div>
</div>

@endsection