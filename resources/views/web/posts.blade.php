@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-auto">
            <h1>Lista de Posts</h1>

            @foreach ($posts as $post)
                <div class="card mb-3 shadow p-1 mb-5 bg-white rounded">
                    <img class="card-img-top img-fluid" src="{{ $post->file }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $post->name }}</h4>
                        <p class="card-text">{{ $post->excerpt }}...</p>
                        <p class="card-text"><small class="text-muted float-lg-right">Creado el: {{ $post->created_at}}</small></p>
                        <a class="btn btn-light" href="{{ route('post', $post->slug ) }}">Leer más</a>
                    </div>
                </div>
            @endforeach
            {{ $posts->render() }}
        </div>
    </div>
@endsection