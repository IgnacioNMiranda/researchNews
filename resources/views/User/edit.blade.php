@extends('layouts.app')

@section('content')
<div class="container mt-4 p-4">
    <div class="row justify-content-center">
        <div class = "col-md-8 justify-content-center">   
            <div class="card border-secondary shadow">
                <div class = "card-header h2 d-flex justify-content-center mb-4 bg-tertiary">
                    Editar Usuario
                </div>
                
                <div class="card-body">
                    {!! Form::open(['route' => ['users.update', $user->id],
                    'method' => 'PUT']) !!}

                        @include('User.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection