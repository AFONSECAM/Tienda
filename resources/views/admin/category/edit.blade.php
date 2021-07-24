@extends('layouts.admin')
@section('title','Editar categoría')
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
            Edición de Categoría
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar categoría</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Categorías</h4>
                    </div>
                    {!! Form::model($category,['route'=>['categories.update', $category], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <strong for="">Nombre</strong>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                    </div>
                    <div class="form-group">
                        <strong for="">Descripción</strong>
                        <textarea name="description" class="form-control" id="description" cols="30"
                            rows="10">{{ $category->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('categories.index') }}" class="btn btn-light">Cancelar</a>

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