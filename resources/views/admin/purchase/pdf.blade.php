<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte compra {{ $purchase->id}}</title>
</head>
<style>
#customers {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
}
</style>
</head>

<body>

    <table id="customers">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
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

    </table>
</body>

</html>