@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <h1> Accept Order</h1>

    <table class="table table-bordered">

        <thead>
            <tr>
               <th>Purchase ID</th>
                <th>Account Name</th>
               <th> Address</th> 
               <th> Type</th>   
               <th> Status</th>    
            </tr>
        </thead>

        <tbody>
             @foreach ($lemons as $lemon)
            <tr>
            @if ($lemon->status === 'Pending')
                <td>{{$lemon->id}}</td>
                <td>{{$lemon->name}}</a></td>
                <td>{{$lemon->address}}</td>
                <td>{{$lemon->type}}</td>
                <td style="background-color:#4CAF50;">{{$lemon->status}}</td>
            @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination Link -->
    {{$lemons->links('pagination::bootstrap-4')}}
    <div class="form-group pb-3">
        <form action="/searchacc" method="get">
            <label for="search">Generate PO Data:</label>
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </span>
            </div>
        </form>    
        </div>
    
               
    <form action="{{ route('accept.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">
       @foreach ($purchases->slice(0,1) as $purchase) 
            @csrf

            <input type="hidden" name="user_email" value="{{$purchase->user_email}}" class="form-control" readonly>
       
            <input type="hidden" name="id" value="{{$purchase->id}}" class="form-control" readonly>
            <input type="hidden" name="orderid" value="{{$purchase->id}}" class="form-control" readonly>

            <input type="hidden" name="invnum" value="0" class="form-control" readonly>
            <input type="hidden" name="stotalstock" value="0" class="form-control" readonly>
            <input type="hidden" name="stockleft" value="0" class="form-control" readonly>
            <input type="hidden" name="stocksold" value="0" class="form-control" readonly>
        
        
        <div class="form-group pb-3">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{$purchase->name}}" class="form-control" readonly>
            <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="form-group pb-3">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$purchase->address}}" class="form-control" readonly>
            <div>{{ $errors->first('address') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{$purchase->type}}" class="form-control" readonly>
            <div>{{ $errors->first('type') }}</div>
        </div>
        
        <div class="form-group pb-3">
            <label for="conact">Contact Person:</label>
            <input type="text" name="contact" value="{{$purchase->contact}} " class="form-control" readonly>
            <div>{{ $errors->first('contact') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="phone">Contact #:</label>
            <input type="text" name="phone" value="{{$purchase->phone}}" class="form-control" readonly>
            <div>{{ $errors->first('phone') }}</div>
        </div>

        <div class="form-group pb-3">
           
            <input type="hidden" name="status" value="Processed" class="form-control" readonly>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <table width="50%" border="3" cellpadding="0" cellspacing="0" class="table table-bordered"   >
        <tr>
        <th style=" background-color:#4CAF50;width:55%;">Product</th>
        <th style=" background-color:#4CAF50;">End Inv</th>
        <th style=" background-color:#4CAF50;">Amount</th>
        <th style=" background-color:#4CAF50;">Price</th>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid" value="{{$purchase->prodid}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product" value="{{$purchase->product}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv" value="{{$purchase->endinv}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel" value="{{$purchase->amount}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price" value="{{$purchase->price}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid2" value="{{$purchase->prodid2}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product2" value="{{$purchase->product2}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv2" value="{{$purchase->endinv2}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel2" value="{{$purchase->amount2}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price2" value="{{$purchase->price2}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid3" value="{{$purchase->prodid3}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product3" value="{{$purchase->product3}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv3" value="{{$purchase->endinv3}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel3" value="{{$purchase->amount3}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price3" value="{{$purchase->price3}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid4" value="{{$purchase->prodid4}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product4" value="{{$purchase->product4}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv4" value="{{$purchase->endinv4}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel4" value="{{$purchase->amount4}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price4" value="{{$purchase->price4}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid5" value="{{$purchase->prodid5}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product5" value="{{$purchase->product5}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv5" value="{{$purchase->endinv5}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel5" value="{{$purchase->amount5}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price5" value="{{$purchase->price5}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid6" value="{{$purchase->prodid6}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product6" value="{{$purchase->product6}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv6" value="{{$purchase->endinv6}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel6" value="{{$purchase->amount6}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price6" value="{{$purchase->price6}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid7" value="{{$purchase->prodid7}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product7" value="{{$purchase->product7}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv7" value="{{$purchase->endinv7}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel7" value="{{$purchase->amount7}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price7" value="{{$purchase->price7}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid8" value="{{$purchase->prodid8}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product8" value="{{$purchase->product8}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv8" value="{{$purchase->endinv8}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel8" value="{{$purchase->amount8}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price8" value="{{$purchase->price8}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid9" value="{{$purchase->prodid9}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product9" value="{{$purchase->product9}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv9" value="{{$purchase->endinv9}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel9" value="{{$purchase->amount9}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price9" value="{{$purchase->price9}}" readonly></td>
        </tr>

        <tr style=" background-color:white;">
        <input type="hidden" style="border:0; " name="prodid10" value="{{$purchase->prodid10}}" readonly>
        <td><input type="text" style="border:0; "class="form-control" name="product10" value="{{$purchase->product10}}" readonly></td>
        <td><input type="text" style="border:0; "class="form-control" name="endinv10" value="{{$purchase->endinv10}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="newdel10" value="{{$purchase->amount10}}" readonly></td>
        <td><input type="number" style="border:0; "class="form-control" name="price10" value="{{$purchase->price10}}" readonly></td>
        </tr>


        </table>

            
        <button type="submit" class="btn btn-primary">Accept Order</button>
         @endforeach
    </form>

    <hr>
@endsection