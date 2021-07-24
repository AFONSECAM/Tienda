@extends('layouts.admin')
@section('title','Registrar producto')
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
            Registro de Productos
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Productos</h4>
                    </div>
                    {!! Form::open(['route'=>'products.store', 'method'=>'POST', 'files' => true]) !!}
                    <div class="form-group">
                        <strong>Nombre</strong>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <strong>Precio de venta</strong>
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" name="sell_price" id="sell_price" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Categoría</strong>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">-- Seleccione un valor -- </option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <strong>Proveedor</strong>
                        <select name="provider_id" id="provider_id" class="form-control">
                            <option value="">-- Seleccione un valor -- </option>
                            @foreach($providers as $provider)
                            <option value="{{ $provider->id}}">{{ $provider->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="card-body">
                        <strong class="card-title d-flex">Imagen del producto</strong>
                        <input type="file" name="picture" id="picture" class="dropify">
                    </div>



                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{ route('products.index') }}" class="btn btn-light">Cancelar</a>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection