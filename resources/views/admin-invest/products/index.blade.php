@extends('layouts.app')

@section('content')
<div class ="container mt-4 p-4">
    <div class = "row justify-content-center">
        <div class ="col-md-12 justify-content-center">
            <div class ="card border-secondary">
                <div class ="card-header h2 bg-tertiary">
                    Listado de Productos
                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-success">Crear Producto</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th style="width: 5cm">Nombre</th>
                                <th>Descripcion</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>

                                <td>{{ $product->id}}</td>
                                <td>{{ $product->name}}</td>
                                <td>{{$product->description}}</td>
                                <td width="10px">
                                    <a href=" {{route('products.edit', $product->id) }}" class="btn btn-sm btn-secondary">
                                        Editar
                                    </a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection