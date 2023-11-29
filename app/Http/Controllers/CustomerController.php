<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
    
        //認証機能の試み
        $user =Auth::user();
        $sort =$request->sort;

        $items = Customer::orderBy($sort,'asc')->simplePaginate(5);
        $param = ['items' => $items,'sort=>$sort','user'=>$user];
        return view('customer.index', $param);
        // //OLD
        // $items = Customer::all();
        // $param = ['items' => $items];
        // return view('customer.index', $param);
    }

    public function add(Request $request)
    {
         return view('customer.add');
    }

    public function create(Request $request)
    {
         $this->validate($request, Customer::$rules);
         $customer = new Customer;
         $form = $request->all();
         unset($form['_token']);
         $customer->fill($form)->save();
         return redirect('/reservation/add');
     }

    //  public function ses_get(Request $request){
    //     $sesdata =$request->session()->get('');
    //  }

    // public function delete(Request $request)
    // {
    //     $customer = Customer::find($request->id);
    //     return view('customer.del', ['form' => $customer]);
    // }

    // public function remove(Request $request)
    // {
    //     Customer::find($request->id)->delete();
    //     return redirect('/customer');
    // }


    // public function edit(Request $request)
    // {
    //     $rental = Customer::find($request->id);
    //     return view('rental.edit', ['form' => $rental]);
    // }

    // public function update(Request $request)
    // {
    //     $this->validate($request, Customer::$rules);
    //     $rental = Customer::find($request->id);
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $rental->fill($form)->save();
    //     return redirect('/rental');
    // }

    // public function find(Request $request)
    // {
    //     return view('rental.find', ['input' => '']);
    // }

    // public function search(Request $request)
    // {

    //     // // 完全一致検索（原始的方法）
    //     $item = Customer::where('bookname', $request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];

    //     return view('rental.find', $param);
    // }

    // public function show(Request $request)
    // {
    //     $bookname= $request ->bookname;
    //     $items = Customer::table('rentals')
    //     ->where('bookname','like','%'.$bookname.'%')
    //     ->get();
    //     return view('rental.show', ['items' => $items]);
    // }
}
