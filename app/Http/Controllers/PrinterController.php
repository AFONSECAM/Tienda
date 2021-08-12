<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Printer\UpdateRequest;
use App\Printer;

class PrinterController extends Controller
{
    public function index()
    {
        $printers = Printer::get();
        return view('admin.printer.index', compact('printers'));
    }

    public function update(UpdateRequest $request, Printer $printer)
    {
        $printer->update($request->all());
        return redirect()->route('printers.index');
    }
}