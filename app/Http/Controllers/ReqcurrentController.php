<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Account;
use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;

class ReqcurrentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:reqcurrent-list|reqcurrent-create|reqcurrent-edit|reqcurrent-delete', ['only' => ['index','show']]);
         $this->middleware('permission:reqcurrent-create', ['only' => ['create','store']]);
         $this->middleware('permission:reqcurrent-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:reqcurrent-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lemons = Inventory::orderBy('id' , 'desc')->paginate(5);
        $inventories = Inventory::all();

        return view('reqcurrent.create', compact('lemons', 'inventories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = Purchase::create($this->validateRequest());

        return redirect('purchase');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateRequest(){

        return request()->validate([
            'user_email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'status' => 'required',

            'orderid' => 'required',

            'prodid' => 'required',
            'product' => 'required',
            'endinv' => 'sometimes',
            'amount' => 'required',
            'price' => 'required',

            'prodid2' => 'sometimes',
            'product2' => 'sometimes',
            'endinv2' => 'sometimes',
            'amount2' => 'sometimes',
            'price2' => 'sometimes',

            'prodid3' => 'sometimes',
            'product3' => 'sometimes',
            'endinv3' => 'sometimes',
            'amount3' => 'sometimes',
            'price3' => 'sometimes',
            
            'prodid4' => 'sometimes',
            'product4' => 'sometimes',
            'endinv4' => 'sometimes',
            'amount4' => 'sometimes',
            'price4' => 'sometimes',

            'prodid5' => 'sometimes',
            'product5' => 'sometimes',
            'endinv5' => 'sometimes',
            'amount5' => 'sometimes',
            'price5' => 'sometimes',

            'prodid6' => 'sometimes',
            'product6' => 'sometimes',
            'endinv6' => 'sometimes',
            'amount6' => 'sometimes',
            'price6' => 'sometimes',

            'prodid7' => 'sometimes',
            'product7' => 'sometimes',
            'endinv7' => 'sometimes',
            'amount7' => 'sometimes',
            'price7' => 'sometimes',

            'prodid8' => 'sometimes',
            'product8' => 'sometimes',
            'endinv8' => 'sometimes',
            'amount8' => 'sometimes',
            'price8' => 'sometimes',

            'prodid9' => 'sometimes',
            'product9' => 'sometimes',
            'endinv9' => 'sometimes',
            'amount9' => 'sometimes',
            'price9' => 'sometimes',

            'prodid10' => 'sometimes',
            'product10' => 'sometimes',
            'endinv10' => 'sometimes',
            'amount10' => 'sometimes',
            'price10' => 'sometimes',
        ]);
    }

    public function searchcurr(Request $request){

        $search = $_GET['search'];
        $inventories = Inventory::where('id',  $search )->get();
        $lemons = Inventory::all();
        $products = Product::all();

        return view('reqcurrent.current', compact('inventories', 'lemons', 'products'));
    }
}
