@extends('layouts.app')

@section('title', 'Daftar Posts')

@section('content')
    <x-alert type="success" :message="session('success')" />
    <x-alert type="danger" :message="session('error')" />

    <x-card title="Daftar Posts">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">📋 Semua Posts</h4>
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">+ Tambah Post</a>
        </div>

        <form action="{{ route('posts.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control"
                       placeholder="Cari post..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                @if(request('search'))
                    <a href="{{ route('posts.index') }}" class="btn btn-outline-danger">Reset</a>
                @endif
            </div>
        </form>

        @if($posts->count())
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Slug</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->title }}</td>
                            <td><small class="text-muted">{{ $post->slug }}</small></td>
                            <td>
                                @if($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                         width="60" class="rounded">
                                @else
                                    <span class="text-muted">—</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $posts->links() }}
        @else
            <p class="text-muted text-center">Tidak ada post ditemukan.</p>
        @endif
    </x-card>
@endsection