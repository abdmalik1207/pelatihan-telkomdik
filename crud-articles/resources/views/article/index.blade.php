@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="py-4">Tabel Data Article</h2>
                    <div>
                        <a href="{{route('articles.create')}}" class="btn btn-info text-white">Tambah Data</a>
                    </div>
                </div>

                @if(session()->has('pesan'))
                    <div class="alert alert-success">
                        {{ session()->get('pesan')}}
                    </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($articles as $article)
                        <tr>
                            <td class="w-25">
                                <img src="{{asset('storage/'.$article->image)}}" class="img-fluid" alt="" style="height: 300px; object-fit: cover;">
                            </td>
                            <td style="word-break: break-all;  width: 100px;">{{$article->title}}</td>
                            <td style="word-break: break-all;  width: 400px;">{{$article->desc}}</td>
                            <td style="word-break: break-all;  width: 100px;">{{$article->category}}</td>
                            <td>
                                <a href="{{route('articles.show', $article->id)}}" class="btn btn-success">Show</a>
                                <a href="{{route('articles.edit', $article->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('articles.destroy', $article->id)}}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>Belum ada data article</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
