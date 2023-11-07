<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $items = Customer::all();
        return view('rental.index', ['items' => $items]);
    }
}
