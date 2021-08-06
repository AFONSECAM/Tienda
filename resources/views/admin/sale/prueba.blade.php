<tr class="selected" id="fila' + cont + '">
    <td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont +');"><i class="fa fa-times"></i></button></td>
    <td><input type="hidden" name="product_id[]" value="' +product_id + '">' + producto + '</td>
    <td> <input type="hidden" id="price[]" name="price[]" value="' +parseFloat(price).toFixed(0) + '"> <input class="form-control" type="number" value="' + parseFloat(price).toFixed(0) +'" disabled> </td>
    <td><input type="hidden" name="discount[]" value="' + parseFloat(discount)+'"><input class="form-control" type="number" value="'+ parseFloat(discount)+'" disabled></td>
    <td> <input type="hidden" name="quantity[]" value="' + quantity +'"> <input class="form-control" type="number" value="' + quantity +'" disabled> </td>
    <td align="right">COP $' + parseFloat(subtotal[cont]).toFixed(0) + ' </td>
</tr>
