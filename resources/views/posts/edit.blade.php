@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <x-card title="Edit Post">
        <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea name="content" rows="5"
                          class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" width="120" class="mb-2 rounded d-block">
                @endif
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </x-card>
@endsection