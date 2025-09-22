@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="py-4">Form Tambah Article</h2>
                <div>
                    <a href="{{route('articles.index')}}" class="btn btn-info text-white">Kembali</a>
                </div>
            </div>
            <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="title">Judul</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                    class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="desc">Deskripsi</label>
                    <textarea id="desc" name="desc" class="form-control @error('desc') is-invalid @enderror"></textarea>
                    @error('desc')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="category">Kategori</label>
                    <input type="text" id="category" name="category" value="{{ old('category') }}"
                    class="form-control @error('category') is-invalid @enderror">
                    @error('category')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label" for="image">Gambar</label>
                    <input type="file" id="image" name="image" value="{{ old('image') }}"
                    class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-end">
                    <button class="btn btn-success">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection