@extends('layouts.admin')
@section('title','Información del cliente')
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
            {{$client->name}}
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$client->name}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class=" text-center pb-4">
                                <div class="card-body">
                                    <img src="{{ asset('image/1626766796_batery.jpeg')}}"
                                        class="img-lg rounded-circle mb-2" alt="profile image">
                                    <h4>{{ $client->name}}</h4>
                                    <p class="text-muted">Developer</p>
                                    <div class="border-top border-bottom pt-3">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-4">
                                                <h6 class="small">25/06/2021</h6>
                                                <p>Cliente desde</p>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <h6 class="small">1596</h6>
                                                <p>Puntos</p>
                                            </div>
                                            <div class="col-sm-12 col-md-4">
                                                <h6 class="small">7896</h6>
                                                <p>Estado</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom py-4">
                                    <div class="list-group">
                                        <a class="list-group-item list-group-item-action active" id="list-profile-list"
                                            data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                                            Sobre cliente
                                        </a>
                                        <a class="list-group-item list-group-item-action" id="list-compras-list"
                                            data-toggle="list" href="#list-compras" role="tab" aria-controls="compras">
                                            Historial de compras
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-8 pl-lg-5">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-profile" user="tabpanel"
                                    aria-labelledby="list-profile-list">

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Información de cliente</h4>
                                        </div>
                                    </div>
                                    <div class="profile-feed">
                                        <div class="d-flex align-items-start profile-feed-item">
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <strong><i class="fab fa-product-hunt mr-1"></i> Nombre</strong>
                                                <p class="text-muted">
                                                    {{$client->name}}
                                                </p>

                                                <hr>
                                                <strong><i class="fas fa-address-card mr-1"></i> Numero de DNI</strong>
                                                <p class="text-muted">
                                                    {{$client->dni}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-address-card mr-1"></i> Numero de RUC</strong>
                                                <p class="text-muted">
                                                    {{$client->ruc}}
                                                </p>
                                                <hr>
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-6">
                                                <strong>
                                                    <i class="fas fa-map-marked-alt mr-1"></i>
                                                    Dirección</strong>
                                                <p class="text-muted">
                                                    {{$client->address}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-mobile mr-1"></i> Teléfono /
                                                    Celular</strong>
                                                <p class="text-muted">
                                                    {{$client->phone}}
                                                </p>
                                                <hr>
                                                <strong><i class="fas fa-envelope mr-1"></i> Correo
                                                    electrónico</strong>
                                                <p class="text-muted">
                                                    {{$client->email}}
                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="tab-pane fade" id="list-compras" user="tabpanel"
                                    aria-labelledby="list-compras-list">


                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h4>Historial de compras</h4>
                                        </div>
                                    </div>


                                </div>
                            </div>





                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{route('clients.index')}}" class="btn btn-primary float-right">Regresar</a>
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