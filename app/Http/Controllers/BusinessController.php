<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Business\UpdateRequest;
use App\Business;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::get();
        return view('admin.business.index', compact('business'));
    }

    public function update(UpdateRequest $request, Business $business)
    {
        $business->update($request->all());
        return redirect()->route('business.index');
    }
}