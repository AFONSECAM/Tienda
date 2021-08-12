<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Business\UpdateRequest;
use App\Business;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.edit')->only(['update']);
    }

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