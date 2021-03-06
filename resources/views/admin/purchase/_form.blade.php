<div class="form-row">
    <div class="form-group col-md-12">
        <div class="form-group">
            <label for="provider_id">Proveedor</label>
            <select class="form-control" name="provider_id" id="provider_id">
                @foreach ($providers as $provider)
                <option value="{{$provider->id}}">{{$provider->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <div class="form-group">
            <label for="product_id">Producto</label>
            <select class="form-control" name="product_id" id="product_id">
                <option value="" disabled selected>Selecccione un producto</option>
                @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group col-md-2">
        <div class="form-group">
            <label for="quantity">Cantidad</label>
            <input type="number" class="form-control form-control-sm" name="quantity" id="quantity"
                aria-describedby="helpId">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label for="impuesto">Impuesto</label>
            <input type="number" class="form-control form-control-sm" name="impuesto2" id="impuesto2">
        </div>
    </div>
    <div class="form-group col-md-3">
        <div class="form-group">
            <label for="price">Precio de compra</label>
            <input type="number" class="form-control form-control-sm" name="price" id="price" aria-describedby="helpId">
        </div>
    </div>

</div>
<div class="form-group">
    <button type="button" id="agregar" class="btn btn-primary float-right">Agregar producto</button>
</div>
<div class="form-group">
    <h4 class="card-title">Detalles de compra</h4>
    <div class="table-responsive col-md-12">
        <table id="detalles" class="table table-striped">
            <thead>
                <tr>
                    <th>Eliminar</th>
                    <th>Producto</th>
                    <th>Precio(COP)</th>
                    <th>Cantidad</th>
                    <th>SubTotal(COP)</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL:</p>
                    </th>
                    <th>
                        <p align="right"><span id="total">COP $0.00</span> </p>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL IMPUESTO (19%):</p>
                    </th>
                    <th>
                        <p align="right"><span id="total_impuesto">COP $0.00</span></p>
                    </th>
                </tr>
                <tr>
                    <th colspan="4">
                        <p align="right">TOTAL PAGAR:</p>
                    </th>
                    <th>
                        <p align="right"><span align="right" id="total_pagar_html">COP 0.00</span>
                            <input type="hidden" name="total" id="total_pagar">
                            <input type="hidden" name="impuesto" id="impuesto">
                        </p>
                    </th>
                </tr>
            </tfoot>
            <tbody>
            </tbody>
        </table>
    </div>
</div>