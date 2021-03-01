@extends('layouts.app')

@section('title', 'Deatails for ' . $purchase->name)

@section('content')
    <h1> Deatails for {{ $purchase->name }} </h1>

    <form action="{{ route('purchase.destroy', ['purchase' => $purchase]) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
    
 </br>

    {{$purchase->created_at}}

    <table class="table table-bordered">

        <thead>
            <tr>
               <th>Purchase ID</th>
                <th>Account Name</th>
               <th> Address</th> 
               <th> Contact Person</th>  
               <th> Contact #</th>  
               <th> Type</th>   
                
            </tr>
        </thead>

        <tbody>
             
            <tr>
                <td>{{$purchase->id}}</td>
                <td>{{$purchase->name}}</td>
                <td>{{$purchase->address}}</td>
                <td>{{$purchase->contact}}</td>
                <td>{{$purchase->phone}}</td>
                <td>{{$purchase->type}}</td>
                

            </tr>
           
        </tbody>
    </table>

    <table width="50%" border="3" cellpadding="0" cellspacing="0" class="tabla">
        <tr>
        <th style=" background-color:#4CAF50;">Product</th>
        <th style=" background-color:#4CAF50;">Amount</th>
        <th style=" background-color:#4CAF50;">Price</th>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product}}</td>
        <td>{{$purchase->amount}}</td>
        <td>{{$purchase->price}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product2}}</td>
        <td>{{$purchase->amount2}}</td>
        <td>{{$purchase->price2}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product3}}</td>
        <td>{{$purchase->amount3}}</td>
        <td>{{$purchase->price3}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product4}}</td>
        <td>{{$purchase->amount4}}</td>
        <td>{{$purchase->price4}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product5}}</td>
        <td>{{$purchase->amount5}}</td>
        <td>{{$purchase->price5}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product6}}</td>
        <td>{{$purchase->amount6}}</td>
        <td>{{$purchase->price6}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product7}}</td>
        <td>{{$purchase->amount7}}</td>
        <td>{{$purchase->price7}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product8}}</td>
        <td>{{$purchase->amount8}}</td>
        <td>{{$purchase->price8}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product9}}</td>
        <td>{{$purchase->amount9}}</td>
        <td>{{$purchase->price9}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td>{{$purchase->product10}}</td>
        <td>{{$purchase->amount10}}</td>
        <td>{{$purchase->price10}}</td>
        </tr>

        <tr style=" background-color:white;">
        <td></td>
        <td>Total:</td>
        <td>{{$purchase->total}}</td>
        </tr>

        </table>



@endsection