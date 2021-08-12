@extends('layouts.admin')
@section('title','Registrar rol')
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
            Registro de rol
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear rol</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Rol</h4>
                    </div>
                    {!! Form::open(['route'=>'roles.store', 'method'=>'POST']) !!}
                    <div class="form-group">
                        <strong for="">Nombre</strong>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <strong for="">Slug</strong>
                        <input type="text" name="slug" id="slug" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <strong for="">Descripción</strong>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                    @include('admin.role._form')
                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('roles.index') }}" class="btn btn-light">Cancelar</a>

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