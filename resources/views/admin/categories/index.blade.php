@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-8 offset-md-2">
                <div class="card mb-3 shadow-sm mb-1 bg-white rounded">
                    <div class="card-header">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary float-lg-right">Crear</a>
                        <h3>Lista de Categoría</h3>
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
                                @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td width="10px">
                                        <a href="{{ route('categories.show',$category->id) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
                                    </td>
                                    <td width="10px">
                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
                                    </td>
                                    <td width="10px">
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-outline-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $categories->render() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

