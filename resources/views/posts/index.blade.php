@extends('layout.app')

@section('title', 'selamat datang')


@section('content')
    <h1>Belajar Laravel
        <a href="{{ url('posts/create') }}" class="btn btn-success">Tambah Postingan</a>
    </h1>

    @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url("posts/$post->id") }}">{{ $post->title }}</a> </h5>
                <p class="card-text"> {{ $post->content }} </p>
                <p class="card-text"><small class="text-body-secondary">Last updated at
                        {{ date('d M Y H:i', strtotime($post->created_at)) }} </small>
                </p>
                <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
    @endforeach
@endsection
