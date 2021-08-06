@extends('layouts.admin')
@section('title','Detalles de compra')
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
            Detalles de compra
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index')}}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$purchase->purchase_date}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6 text-center">
                            <label class="form-control-label" for="nombre">Proveedor</label>
                            <p>{{ $purchase->provider->name}}</p>
                        </div>
                        <div class="col-md-6 text-center">
                            <label class="form-control-label" for="nombre">Número de compra</label>
                            <p>{{ $purchase->id}}</p>
                        </div>
                    </div>

                    <div class="form-group row">
                        <h4 class="card-title ml-3">Detalles de compra</h4>
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
                                            <p align="right">{{ $purchase->impuesto}}% </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="3">
                                            <p align="right">Total: </p>
                                        </th>
                                        <th>
                                            <p align="right">$ {{ number_format($purchase->total,0) }}</p>
                                        </th>
                                    </tr>
                                </tfoot>
                                <tbody class="text-center">
                                    @foreach($purchaseDetails as $purchaseDetail)
                                    <tr>
                                        <td>{{ $purchaseDetail->product->name}}</td>
                                        <td>$ {{ number_format($purchaseDetail->price,0) }}</td>
                                        <td>{{ $purchaseDetail->quantity }}</td>
                                        <td>$ {{ $subtotal }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('purchases.index')}}" class="btn btn-primary float-right">Regresar</a>
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