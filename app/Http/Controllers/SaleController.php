<?php

namespace App\Http\Controllers;

use App\Category;
use App\Client;
use App\Sale;
use Illuminate\Http\Request;
use App\Http\Requests\Sale\StoreRequest;
use App\Http\Requests\Sale\UpdateRequest;
use App\Product;
use App\Provider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sales = Sale::get();
        return view('admin.sale.index', compact('sales'));
    }


    public function create()
    {
        $clients = Client::get();
        $products = Product::get();
        return view('admin.sale.create', compact('clients', 'products'));
    }


    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all() + [
            'sale_date' => Carbon::now('America/Bogota'),
            'user_id' => Auth::user()->id
        ]);
        foreach ($request->product_id as $key => $product) {
            $results[] = array("product_id" => $request->product_id[$key], "quantity" => $request->quantity[$key], "price" => $request->price[$key], "discount" => $request->discount[$key]);
        }
        $sale->saleDetails()->createMany($results);
        return redirect()->route('sales.index');
    }


    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.sale.create', compact('sale', 'clients'));
    }


    public function update(UpdateRequest $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
