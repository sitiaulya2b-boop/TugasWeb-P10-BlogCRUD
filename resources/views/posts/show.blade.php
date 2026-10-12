@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <x-card :title="$post->title">
        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 rounded" style="max-height:300px;">
        @endif
        <p>{{ $post->content }}</p>
        <small class="text-muted">Dibuat: {{ $post->created_at->diffForHumans() }}</small>
        <br>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-sm mt-3">Kembali</a>
    </x-card>
@endsection