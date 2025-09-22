@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="py-4">Detail Article</h2>
        <div>
            <a href="{{route('articles.index')}}" class="btn btn-info text-white">Kembali</a>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <img src="{{asset('storage/'.$article->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">
                {{$article->desc}}
              </p>
              <div class="d-flex justify-content-between">
                <div class="">
                    <span class="badge bg-primary">{{$article->category}}</span>
                </div>
                <p>{{$article->created_at->format('d-m-Y')}}</p>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection