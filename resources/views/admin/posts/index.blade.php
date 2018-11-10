@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <div class="card mb-3 shadow-sm mb-1 bg-white rounded">
                    <div class="card-header">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary float-lg-right">Crear</a>
                        <h3>Lista de Entradas</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-8 offset-md-2">
                <div class="card mb-3 shadow-lg mb-5 bg-white rounded">
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td>{{ $post->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('posts.show',$post->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-outline-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->render() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

