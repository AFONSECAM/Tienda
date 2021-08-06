@extends('layouts.admin')
@section('title','Registrar venta')
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
            Registro de venta
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar venta</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                {!! Form::open(['route'=>'sales.store', 'method'=>'POST']) !!}
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de venta</h4>
                    </div>

                    @include('admin.sale._form')


                </div>
                <div class="card-footer text-muted">
                    <button type="submit" id="guardar" class="btn btn-primary float-right">Registrar</button>
                    <a href="{{route('sales.index')}}" class="btn btn-light">
                        Cancelar
                    </a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $("#agregar").click(function() {
        agregar();
    });
});

var cont = 0;
total = 0;
subtotal = [];

$("#guardar").hide();

function agregar() {

    product_id = $("#product_id").val();
    producto = $("#product_id option:selected").text();
    quantity = $("#quantity").val();
    price = $("#price").val();
    impuesto = $("#impuesto2").val();
    console.log(impuesto);

    if (product_id != "" && quantity != "" && quantity > 0 && price != "") {
        subtotal[cont] = quantity * price;
        total = total + subtotal[cont];
        var fila = '<tr class="selected" id="fila' + cont +
            '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont +
            ');"><i class="fa fa-times"></i></button></td> <td><input type="hidden" name="product_id[]" value="' +
            product_id + '">' + producto + '</td> <td> <input type="hidden" id="price[]" name="price[]" value="' +
            price + '"> <input class="form-control" type="number" id="price[]" value="' + price +
            '" disabled> </td>  <td> <input type="hidden" name="quantity[]" value="' + quantity +
            '"> <input class="form-control" type="number" value="' + quantity +
            '" disabled> </td> <td align="right">COP $' + subtotal[cont] + ' </td></tr>';
        cont++;
        limpiar();
        totales();
        evaluar();
        $('#detalles').append(fila);
    } else {

        swal("Debes diligenciar todos los datos", {
            icon: 'error',
            buttons: false,
            timer: 1500,
        });

    }
}


function limpiar() {
    $("#quantity").val("");
    $("#impuesto2").val("");
    $("#price").val("");
}

function totales() {
    $("#total").html("COP $" + total.toFixed(0));
    total_impuesto = total * impuesto / 100;
    total_pagar = total + total_impuesto;
    $("#total_impuesto").html("COP $" + total_impuesto.toFixed(0));
    $("#total_pagar_html").html("COP $" + total_pagar.toFixed(0));
    $("#total_pagar").val(total_pagar.toFixed(2));
    $("#impuesto").val(impuesto);
}

function evaluar() {
    if (total > 0) {
        $("#guardar").show();
    } else {
        $("#guardar").hide();
    }
}

function eliminar(index) {
    total = total - subtotal[index];
    total_impuesto = total * impuesto / 100;
    total_pagar_html = total + total_impuesto;
    $("#total").html("COP $" + total);
    $("#total_impuesto").html("COP $" + total_impuesto);
    $("#total_pagar_html").html("COP $" + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila" + index).remove();
    evaluar();
}
</script>
@endsection