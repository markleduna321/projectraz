<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Account;
use App\Models\Product;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:purchase-list|purchase-create|purchase-edit|purchase-delete', ['only' => ['index','store']]);
         $this->middleware('permission:purchase-create', ['only' => ['create','store']]);
         $this->middleware('permission:purchase-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:purchase-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $purchases = Purchase::orderBy('id' , 'desc')->paginate(5);

        return view('purchase.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::all();
        $products = Product::all();

        return view('purchase.create', compact('accounts', 'products'));
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
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        return view('purcahse.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        return view('purcahse.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchase $purchase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchase $purchase)
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
            'amount' => 'required',
            'price' => 'required',

            'prodid2' => 'sometimes',
            'product2' => 'sometimes',
            'amount2' => 'sometimes',
            'price2' => 'sometimes',

            'prodid3' => 'sometimes',
            'product3' => 'sometimes',
            'amount3' => 'sometimes',
            'price3' => 'sometimes',
            
            'prodid4' => 'sometimes',
            'product4' => 'sometimes',
            'amount4' => 'sometimes',
            'price4' => 'sometimes',

            'prodid5' => 'sometimes',
            'product5' => 'sometimes',
            'amount5' => 'sometimes',
            'price5' => 'sometimes',

            'prodid6' => 'sometimes',
            'product6' => 'sometimes',
            'amount6' => 'sometimes',
            'price6' => 'sometimes',

            'prodid7' => 'sometimes',
            'product7' => 'sometimes',
            'amount7' => 'sometimes',
            'price7' => 'sometimes',

            'prodid8' => 'sometimes',
            'product8' => 'sometimes',
            'amount8' => 'sometimes',
            'price8' => 'sometimes',

            'prodid9' => 'sometimes',
            'product9' => 'sometimes',
            'amount9' => 'sometimes',
            'price9' => 'sometimes',

            'prodid10' => 'sometimes',
            'product10' => 'sometimes',
            'amount10' => 'sometimes',
            'price10' => 'sometimes',
        ]);
    }

    public function search(Request $request){

        $products = Product::all();
        $search = $_GET['search'];
        $accounts = Account::where('name',  $search )->get();

        return view('purchase.create', compact('accounts', 'products'));
    }
}
