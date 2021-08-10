@extends('layouts.admin')
@section('title','Detalles de venta')
@section('styles')

@endsection
@section('create')

@endsection
@section('options')

@endsection
@section('preference')

@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Detalles de venta
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sales.index')}}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$sale->sale_date}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="nombre">Cliente</label>
                            <p><a href="{{ route('clients.show', $sale->client) }}">{{ $sale->client->name}}</a></p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="nombre">Número de venta</label>
                            <p>{{ $sale->id}}</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <label class="form-control-label" for="nombre">Vendedor</label>
                            <p>{{ $sale->user->name}}</p>
                        </div>

                    </div>

                    <div class="form-group row">
                        <h4 class="card-title ml-3">Detalles de venta</h4>
                        <div class="table-responsive col-md-12">
                            <table id="detalles" class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th>Producto</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">Subtotal:</p>
                                        </th>
                                        <th>
                                            <p align="right">$ {{ $subtotal }} </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">IVA:</p>
                                        </th>
                                        <th>
                                            <p align="right">{{ $sale->impuesto}}% </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">Total: </p>
                                        </th>
                                        <th>
                                            <p align="right">$ {{ number_format($sale->total,0) }}</p>
                                        </th>
                                    </tr>
                                </tfoot>
                                <tbody class="text-center">
                                    @foreach($saleDetails as $saleDetail)
                                    <tr>
                                        <td>{{ $saleDetail->product->name}}</td>
                                        <td>$ {{ number_format($saleDetail->price,0) }}</td>
                                        <td>{{ $saleDetail->quantity }}</td>
                                        <td>$ {{ $subtotal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('sales.index')}}" class="btn btn-primary float-right">Regresar</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/profile-demo.js') !!}
{!! Html::script('melody/js/data-table.js') !!}
@endsection