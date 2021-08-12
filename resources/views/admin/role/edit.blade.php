@extends('layouts.admin')
@section('title','Editar rol')
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
            Edición de rol
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar categoría</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Roles</h4>
                    </div>
                    {!! Form::model($role,['route'=>['roles.update', $role], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <strong for="">Nombre</strong>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $role->name }}">
                    </div>
                    <div class="form-group">
                        <strong for="">Slug</strong>
                        <input type="text" name="slug" id="slug" class="form-control" value="{{ $role->slug }}">
                    </div>
                    <div class="form-group">
                        <strong for="">Descripción</strong>
                        <textarea name="description" class="form-control" id="description" cols="30"
                            rows="10">{{ $role->description }}</textarea>
                    </div>
                    @include('admin.role._form')
                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
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