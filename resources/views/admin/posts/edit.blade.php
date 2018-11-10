@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <div class="card mb-3 shadow-sm mb-1 bg-white rounded">
                    <div class="card-header">
                        <h3>Editar Entrada</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="card mb-3 shadow-lg mb-5 bg-white rounded">
                    <div class="card-body">
                        {!! Form::model($post, ['route' => ['posts.update', $post->id], 
                                                'method' => 'PUT', 'files' => true ]) !!}
                            @include('admin.posts.partials.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
