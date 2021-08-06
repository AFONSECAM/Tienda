<div class="form-row">
    <div class="form-group col-md-12">
        <div class="form-group">
            <label for="client_id">Cliente</label>
            <select class="form-control" name="client_id" id="client_id">
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-7">
        <div class="form-group">
            <label for="product_id">Producto</label>
            <select class="form-control" name="product_id" id="product_id">
                <option value="" disabled selected>Selecccione un producto</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}_{{ $product->stock }}_{{ $product->sell_price }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label for="price">Precio de venta</label>
            <input type="number" class="form-control form-control-sm" name="price" id="price" disabled>
        </div>
    </div>
    <div class="form-group col-md-2">
        <label for="">Stock actual</label>
        <input type="text" name="stock" id="stock" class="form-control form-control-sm" disabled>
    </div>

    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="impuesto">Impuesto</label>
            <input type="number" class="form-control form-control-sm" name="impuesto" id="impuesto">
        </div>
    </div>


    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control form-control-sm" name="quantity" id="quantity">
        </div>
    </div>



    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="price">Descuento</label>
            <input type="number" class="form-control form-control-sm" name="discount" id="discount">
        </div>
    </div>

</div>
<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>
<div class="form-group">
    <h4 class="card-title">Detalles de venta</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio venta(COP)</th>
                    <th>Descuento</th>
                    <th>Cantidad</th>
                    <th>SubTotal(COP)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total">COP $0.00</span> </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL IMPUESTO (19%):</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">COP $0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="5">
                        <p align="right">TOTAL PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">COP 0.00</span>
                            <input type="hidden" name="total" id="total_pagar">

                        </p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
