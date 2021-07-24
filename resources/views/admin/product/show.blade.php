@extends('layouts.admin')
@section('title','Información del producto')
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
            {{$product->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index')}}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border-bottom text-center pb-4">
                                <img src="{{ asset('image/' . $product->image)}}" alt="" class="img-lg mb-3">
                                <h3>{{$product->name}}</h3>
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>

                            <p class="clearfix">
                                <span class="float-left">
                                    Status
                                </span>
                                @if($product->status == "ACTIVE")
                                <span class="float-right" style="color:green">
                                    {{ ucfirst(strtolower($product->status))}}
                                </span>
                                @endif
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Provider
                                </span>
                                <span class="float-right text-muted">
                                    <a href="{{route('providers.show',$product->provider)}}">
                                        {{ $product->provider->name}}
                                    </a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Category
                                </span>
                                <span class="float-right text-muted">
                                    <a href="">
                                        {{ $product->category->name}}
                                    </a>
                                </span>
                            </p>
                            @if($product->status == "ACTIVE")
                            <button class="btn btn-danger btn-block">Desactivate</button>
                            @else
                            <button class="btn btn-success btn-block">Active</button>
                            @endif
                        </div>
                        <div class="col-lg-8 pl-lg-5">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4>Información del producto</h4>
                                </div>
                            </div>
                            <div class="profile-feed">
                                <div class="d-flex align-items-start profile-feed-item">
                                    <div class="form-group col-md-6">
                                        <strong><i class="fa fa-barcode mr-1"></i> Código</strong>
                                        <p class="text-muted">
                                            {{$product->code}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-usd mr-1"></i> Precio venta</strong>
                                        <p class="text-muted">
                                            {{$product->sell_price}}
                                        </p>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <strong><i class="fa fa-archive mr-1"></i> Stock</strong>
                                        <p class="text-muted">
                                            {{$product->stock}}
                                        </p>
                                        <hr>
                                        <strong><i class="fa fa-calendar-alt mr-1"></i> Fecha creación</strong>
                                        <p class="text-muted">
                                            {{$product->created_at}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('products.index')}}" class="btn btn-primary float-right">Regresar</a>
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