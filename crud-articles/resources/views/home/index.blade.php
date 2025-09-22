@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="thumbnail">
                @if($articles_1)
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item text-muted">{{ $articles_1->category }}</li>
                        </ol>
                    </nav>
                    <h1 class="">{{ $articles_1->title }}</h1>
                    <div class="d-flex mt-4">
                        <p class="text-muted me-2">{{ $articles_1->created_at->format('d M Y') }}</p>
                        <p class="text-muted me-2">Oleh&nbsp;{{ $articles_1->user->name }}</p>
                    </div>
                    <img src="{{asset('storage/'.$articles_1->image)}}" class="img-fluid w-100" alt="" style="height: 450px; object-fit: cover;">
                    <div class="mt-4">
                        <p>{{ $articles_1->desc }}</p>
                        <hr>
                    </div>
                @else
                    Nothing
                @endif
                
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card h-50" style="border-radius: 0%">
                <div class="card-header">
                    <h4 class="text-center">Artikel Terbaru</h4>
                </div>
                <div class="card-body overflow-scroll ">
                    <div class="row">
                        @foreach ($articles_2 as $article)
                        <div class="col-sm-12 my-3 border-top">
                            <a href="{{route('home.show', $article->id)}}" class="text-decoration-none text-dark">
                                <div class="caption">
                                    <h5>{{ $article->title }}</h5>
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <img src="{{asset('storage/'.$article->image)}}"  class="img-fluid w-100" alt="" style="height: 50px; object-fit: cover;">
                                        </div>
                                        <div class="col-sm-9">
                                            <p style="display: block; width: 100%; overflow: hidden; white-space: nowrap;text-overflow: ellipsis; font-size: 12px;">{{ $article->desc }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection