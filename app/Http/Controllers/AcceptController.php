<?php

namespace App\Http\Controllers;

use App\Models\Accept;
use App\Models\Purchase;
use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;

class AcceptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:accept-list|accept-create|accept-edit|accept-delete', ['only' => ['index','store']]);
         $this->middleware('permission:accept-create', ['only' => ['create','store']]);
         $this->middleware('permission:accept-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:accept-delete', ['only' => ['destroy']]);
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
        $lemons = Purchase::orderBy('id' , 'desc')->paginate(5);
        $purchases = Purchase::all();
        $accept = new Inventory();

        return view('accept.create', compact('accept','lemons', 'purchases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purchase = Purchase::find($request->id);
        $purchase->status = $request->status;
        $purchase->save();     
        $inventory = Inventory::create($this->validateRequest());

        return redirect('accept/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function show(Accept $accept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function edit(Accept $accept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accept $accept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accept  $accept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accept $accept)
    {
        //
    }

    private function validateRequest(){

        return request()->validate([
            'user_email' => 'required',
            'name' => 'required|min:3',
            'address' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'type' => 'required',
            'status' => 'required',

            'orderid'=>'required',

            'endinv' => 'sometimes',
            'invnum' => 'sometimes',
            'totalstock' => 'sometimes',
            'stockleft' => 'sometimes',
            'stocksold' => 'sometimes',

            'prodid' => 'required',
            'product' => 'required',
            'newdel' => 'required',
            'price' => 'required',

            'prodid2' => 'sometimes',
            'product2' => 'sometimes',
            'endinv2' => 'sometimes',
            'newdel2' => 'sometimes',
            'price2' => 'sometimes',

            'prodid3' => 'sometimes',
            'product3' => 'sometimes',
            'endinv3' => 'sometimes',
            'newdel3' => 'sometimes',
            'price3' => 'sometimes',

            'prodid4' => 'sometimes',
            'product4' => 'sometimes',
            'endinv4' => 'sometimes',
            'newdel4' => 'sometimes',
            'price4' => 'sometimes',

            'prodid5' => 'sometimes',
            'product5' => 'sometimes',
            'endinv5' => 'sometimes',
            'newdel5' => 'sometimes',
            'price5' => 'sometimes',

            'prodid6' => 'sometimes',
            'product6' => 'sometimes',
            'endinv6' => 'sometimes',
            'newdel6' => 'sometimes',
            'price6' => 'sometimes',

            'prodid7' => 'sometimes',
            'product7' => 'sometimes',
            'endinv7' => 'sometimes',
            'newdel7' => 'sometimes',
            'price7' => 'sometimes',

            'prodid8' => 'sometimes',
            'product8' => 'sometimes',
            'endinv8' => 'sometimes',
            'newdel8' => 'sometimes',
            'price8' => 'sometimes',

            'prodid9' => 'sometimes',
            'product9' => 'sometimes',
            'endinv9' => 'sometimes',
            'newdel9' => 'sometimes',
            'price9' => 'sometimes',

            'prodid10' => 'sometimes',
            'product10' => 'sometimes',
            'endinv10' => 'sometimes',
            'newdel10' => 'sometimes',
            'price10' => 'sometimes',

            'total' => 'sometimes',
        ]);
    }

    public function searchacc(Request $request){

        $search = $_GET['search'];
        $purchases = Purchase::where('id',  $search )->get();
        $lemons = Purchase::orderBy('id' , 'desc')->paginate(5);

        return view('accept.create', compact('purchases', 'lemons'));
    }
}
