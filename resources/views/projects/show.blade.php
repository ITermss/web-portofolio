@extends('layouts.app')

@section('title', $project->title)

@section('content')

<div class="container mt-4">

    <h1>{{ $project->judul }}</h1>

    <p class="mt-3">
        {{ $project->deskripsi }}
    </p>

    <p>
        <strong>Teknologi:</strong>
        {{ $project->teknologi }}
    </p>

    @if($project->link)
        <a href="{{ $project->link }}"
           target="_blank"
           class="btn btn-primary">
            Lihat Project
        </a>
    @endif

    <a href="{{ route('projects.index') }}"
       class="btn btn-secondary">
        Kembali
    </a>

</div>

@endsection