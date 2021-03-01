<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Purchase;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:inventory-list|inventory-create|inventory-edit|inventory-delete', ['only' => ['index','show']]);
         $this->middleware('permission:inventory-create', ['only' => ['create','store']]);
         $this->middleware('permission:inventory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:inventory-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $inventories = Inventory::orderBy('id' , 'desc')->paginate(10);

        return view('inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {
        return view('inventory.show', compact('inventory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        return view('inventory.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {
        $request['totalstock'] = $request->newdel + $request->endinv;
        $request['totalstock2'] = $request->newdel2 + $request->endinv2;
        $request['totalstock3'] = $request->newdel3 + $request->endinv3;
        $request['totalstock4'] = $request->newdel4 + $request->endinv4;
        $request['totalstock5'] = $request->newdel5 + $request->endinv5;
        $request['totalstock6'] = $request->newdel6 + $request->endinv6;
        $request['totalstock7'] = $request->newdel7 + $request->endinv7;
        $request['totalstock8'] = $request->newdel8 + $request->endinv8;
        $request['totalstock9'] = $request->newdel9 + $request->endinv9;
        $request['totalstock10'] = $request->newdel10 + $request->endinv10;

        $request['amount'] = $request->price * $request->stocksold;
        $request['amount2'] = $request->price2 * $request->stocksold2;
        $request['amount3'] = $request->price3 * $request->stocksold3;
        $request['amount4'] = $request->price4 * $request->stocksold4;
        $request['amount5'] = $request->price5 * $request->stocksold5;
        $request['amount6'] = $request->price6 * $request->stocksold6;
        $request['amount7'] = $request->price7 * $request->stocksold7;
        $request['amount8'] = $request->price8 * $request->stocksold8;
        $request['amount9'] = $request->price9 * $request->stocksold9;
        $request['amount10'] = $request->price10 * $request->stocksold10;

        $request['stockleft'] = $request->totalstock - $request->stocksold;
        $request['stockleft2'] = $request->totalstock2 - $request->stocksold2;
        $request['stockleft3'] = $request->totalstock3 - $request->stocksold3;
        $request['stockleft4'] = $request->totalstock4 - $request->stocksold4;
        $request['stockleft5'] = $request->totalstock5 - $request->stocksold5;
        $request['stockleft6'] = $request->totalstock6 - $request->stocksold6;
        $request['stockleft7'] = $request->totalstock7 - $request->stocksold7;
        $request['stockleft8'] = $request->totalstock8 - $request->stocksold8;
        $request['stockleft9'] = $request->totalstock9 - $request->stocksold9;
        $request['stockleft10'] = $request->totalstock10 - $request->stocksold10;

        $request['total'] = $request->amount + $request->amount2
        + $request->amount3 + $request->amount4
        + $request->amount5 + $request->amount6
        + $request->amount7 + $request->amount8
        + $request->amount9 + $request->amount10;

        $purchase = Purchase::find($request->orderid);
        $purchase->status = $request->status;
        $purchase->save();  

        $inventory->update($this->validateRequest());

        return redirect('inventory/' . $inventory->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect('inventory');
    }

    private function validateRequest(){

        return request()->validate([
            'user_email' => 'sometimes',
            'id' => 'sometimes',
            'name' => 'sometimes|min:3',
            'address' => 'sometimes',
            'contact' => 'sometimes',
            'phone' => 'sometimes',
            'type' => 'sometimes',
            'status' => 'required',

            'endinv' => 'sometimes',
            'invnum' => 'sometimes',
            'totalstock' => 'sometimes',
            'stockleft' => 'sometimes',
            'stocksold' => 'sometimes',
            'newdel' => 'sometimes',

            'endinv2' => 'sometimes',
            'invnum2' => 'sometimes',
            'totalstock2' => 'sometimes',
            'stockleft2' => 'sometimes',
            'stocksold2' => 'sometimes',
            'newdel2' => 'sometimes',

            'endinv3' => 'sometimes',
            'invnum3' => 'sometimes',
            'totalstock3' => 'sometimes',
            'stockleft3' => 'sometimes',
            'stocksold3' => 'sometimes',
            'newdel3' => 'sometimes',

            'endinv4' => 'sometimes',
            'invnum4' => 'sometimes',
            'totalstock4' => 'sometimes',
            'stockleft4' => 'sometimes',
            'stocksold4' => 'sometimes',
            'newdel4' => 'sometimes',

            'endinv5' => 'sometimes',
            'invnum5' => 'sometimes',
            'totalstock5' => 'sometimes',
            'stockleft5' => 'sometimes',
            'stocksold5' => 'sometimes',
            'newdel5' => 'sometimes',

            'endinv6' => 'sometimes',
            'invnum6' => 'sometimes',
            'totalstock6' => 'sometimes',
            'stockleft6' => 'sometimes',
            'stocksold6' => 'sometimes',
            'newdel6' => 'sometimes',

            'endinv7' => 'sometimes',
            'invnum7' => 'sometimes',
            'totalstock7' => 'sometimes',
            'stockleft7' => 'sometimes',
            'stocksold7' => 'sometimes',
            'newdel7' => 'sometimes',

            'endinv8' => 'sometimes',
            'invnum8' => 'sometimes',
            'totalstock8' => 'sometimes',
            'stockleft8' => 'sometimes',
            'stocksold8' => 'sometimes',
            'newdel8' => 'sometimes',

            'endinv9' => 'sometimes',
            'invnum9' => 'sometimes',
            'totalstock9' => 'sometimes',
            'stockleft9' => 'sometimes',
            'stocksold9' => 'sometimes',
            'newdel9' => 'sometimes',

            'endinv10' => 'sometimes',
            'invnum10' => 'sometimes',
            'totalstock10' => 'sometimes',
            'stockleft10' => 'sometimes',
            'stocksold10' => 'sometimes',
            'newdel10' => 'sometimes',

            'product' => 'sometimes',
            'amount' => 'sometimes',
            'price' => 'sometimes',

            'product2' => 'sometimes',
            'amount2' => 'sometimes',
            'price2' => 'sometimes',

            'product3' => 'sometimes',
            'amount3' => 'sometimes',
            'price3' => 'sometimes',

            'product4' => 'sometimes',
            'amount4' => 'sometimes',
            'price4' => 'sometimes',

            'product5' => 'sometimes',
            'amount5' => 'sometimes',
            'price5' => 'sometimes',

            'product6' => 'sometimes',
            'amount6' => 'sometimes',
            'price6' => 'sometimes',

            'product7' => 'sometimes',
            'amount7' => 'sometimes',
            'price7' => 'sometimes',

            'product8' => 'sometimes',
            'amount8' => 'sometimes',
            'price8' => 'sometimes',

            'product9' => 'sometimes',
            'amount9' => 'sometimes',
            'price9' => 'sometimes',

            'product10' => 'sometimes',
            'amount10' => 'sometimes',
            'price10' => 'sometimes',

            'total' => 'sometimes',
        ]);
    }
}
