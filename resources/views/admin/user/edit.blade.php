@extends('layouts.admin')
@section('title','Editar usuario')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Edición de usuario
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar usuario</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Usuarios</h4>
                    </div>
                    {!! Form::model($user,['route'=>['users.update', $user], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <strong for="">Nombre</strong>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <strong for="">Email</strong>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}"
                            required>
                    </div>

                    <!-- <div class="form-group">
                        <strong for="">Contraseña</strong>
                        <input type="password" name="password" id="password" class="form-control"
                            value="{{ $user->password }}" required>
                    </div> -->
                    @include('admin.user._form')
                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('users.index') }}" class="btn btn-light">Cancelar</a>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection