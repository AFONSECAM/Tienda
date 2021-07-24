@extends('layouts.admin')
@section('title','Editar proveedor')
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
            Edición de Proveedores
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('providers.index') }}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar proveedor</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Proveedores</h4>
                    </div>
                    {!! Form::model($provider,['route'=>['providers.update',$provider], 'method'=>'PUT']) !!}
                    <div class="form-group">
                        <strong>Nombre</strong>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $provider->name }}"
                            required>
                    </div>
                    <div class="form-group">
                        <strong>Email</strong>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $provider->email }}"
                            required>
                    </div>
                    <div class="form-group">
                        <strong>RUC</strong>
                        <input type="number" class="form-control" name="ruc_number" id="ruc_number"
                            value="{{ $provider->ruc_number }}">
                    </div>
                    <div class="form-group">
                        <strong>Dirección</strong>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $provider->address }}" required>
                    </div>
                    <div class="form-group">
                        <strong>Teléfono</strong>
                        <input type="number" class="form-control" name="phone" id="phone"
                            value="{{ $provider->phone }}">
                    </div>



                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{ route('providers.index') }}" class="btn btn-light">Cancelar</a>

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