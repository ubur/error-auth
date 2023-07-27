@extends('layout.app')

@section('title', 'buat postingan')

@section('content')
    <h1>Buat Postingan</h1>
    <form action="{{ url('posts') }}" method="post" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Kontent</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Judul</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ url('posts') }}" class="btn btn-dark">Kembali</a>
    </form>
@endsection
