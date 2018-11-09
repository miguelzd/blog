@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-auto">
            <div class="card mb-3 shadow p-1 mb-5 bg-white rounded">
                <img class="card-img-top img-fluid" src="{{ $post->file }}" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title">{{ $post->name }}</h1>
                    <br>
                    <h5 class="card-subtitle">{{ $post->excerpt }}</h5>
                    <br>
                    <h5 class="card-subtitle">Categoría <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a></h5>
                    <hr>
                    {!! $post->body !!}
                    <p class="card-text"><small class="text-muted float-lg-right">Publicado el {{ $post->created_at}}</small></p>
                    <br>
                    <p class="card-text">Etiquetas
                        @foreach ($post->tags as $tag)
                        <a class="btn btn-outline-primary btn-sm" href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                    </p>
                    <hr>
                    <a class="btn btn-light" href="{!! URL::previous() !!}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection