@extends('layouts.admin')
@section('title','Gestión de compras')
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
            Compras
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Compras</h4>

                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{route('purchases.create')}}" class="dropdown-item">Registrar compra</a>
                                <!-- <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button> -->
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Fecha</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($purchases))
                                @foreach ($purchases as $purchase)
                                <tr>
                                    <th scope="row">
                                        <a href="{{ route('purchases.show', $purchase) }}">{{$purchase->id}}</a>
                                    </th>
                                    <td>{{$purchase->purchase_date}}</td>
                                    <td>$ {{number_format($purchase->total,0) }}</td>
                                    <td>{{$purchase->status}}</td>
                                    <td style="width: 100px;">
                                        {!! Form::open(['route'=>['categories.destroy',$purchase], 'method'=>'DELETE'])
                                        !!}
                                        {!! Form::close() !!}

                                        <!-- <a class="jsgrid-button jsgrid-edit-button"
                                            href="{{route('categories.edit', $purchase)}}" title="Editar">
                                            <i class="far fa-edit"></i>
                                        </a> -->
                                        <a class="jsgrid-button jsgrid-edit-button"
                                            href="{{ route('purchases.pdf', $purchase) }}"><i
                                                class="far fa-file-pdf"></i></a>
                                        <a class="jsgrid-button jsgrid-edit-button"
                                            href="{{ route('purchases.pdf', $purchase) }}"><i
                                                class="fas fa-print"></i></a>
                                        <a class="jsgrid-button jsgrid-edit-button"
                                            href="{{ route('purchases.show', $purchase) }}"><i
                                                class="far fa-eye"></i></a>

                                        <!-- <button class="jsgrid-button jsgrid-delete-button unstyled-button" type="submit"
                                            title="Eliminar">
                                            <i class="far fa-trash-alt"></i>
                                        </button> -->

                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- <div class="card-footer text-muted">
                    {{$categories->render()}}
            </div> --}}
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection