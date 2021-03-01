@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')

    <h1> Request Order (Current/Update) </h1>
    <br>

    <form action="{{ route('reqcurrent.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">
        @foreach ($inventories->slice(0,1) as $inventory) 
            @csrf
       
            <input type="hidden" name="user_email" value="{{ Auth::user()->email }}" class="form-control">
            <div>{{ $errors->first('user_email') }}</div>

            <input type="hidden" name="orderid" value="{{ $inventory->orderid }}" class="form-control">
            <div>{{ $errors->first('orderid') }}</div>

            <div class="form-group pb-2">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{$inventory->name}}" readonly class="form-control">
            <div>{{ $errors->first('name') }}</div>
            </div>
        
            <div class="form-group pb-2">
            <label for="date">Date:</label>
            <input type="text" name="date" value="{{$inventory->updated_at}}" readonly class="form-control">
            <div>{{ $errors->first('date') }}</div>
            </div>
        
            <div class="form-group pb-2">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$inventory->address}}" readonly class="form-control">
            <div>{{ $errors->first('address') }}</div>
            </div>

            <div class="form-group pb-3">
            <input type="hidden" name="type" value="{{$inventory->type}}" class="form-control">
            <div>{{ $errors->first('type') }}</div>
            </div>

            <div class="form-group pb-3">
            <label for="conact">Contact Person:</label>
            <input type="text" name="contact" value="{{old('contact')}} " class="form-control">
            <div>{{ $errors->first('contact') }}</div>
            </div>

            <div class="form-group pb-3">
            <label for="phone">Contact #:</label>
            <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
            </div>

            <div class="form-group pb-3">           
            <input type="hidden" name="status" value="Pending" class="form-control" readonly>
            <div>{{ $errors->first('status') }}</div>
            </div>
       
    <table border="3" cellpadding="0" cellspacing="0" class="table table-bordered">
        <tr>
            <th style=" background-color:#4CAF50; width:40%;">Product</th>
            <th style=" background-color:#4CAF50; width:10%;">END INV</th>
            <th style=" background-color:#4CAF50; width:25%;">QTY</th>
            <th style=" background-color:#4CAF50; width:25%;">Price</th>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid" value="{{$inventory->prodid}}" readonly>
        @if(is_null($inventory->product))
            <select name="product" id="product" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
            <input type="text" style="border:0;" class="form-control" name="product" value="{{$inventory->product}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv" value="{{$inventory->stockleft}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid2" value="{{$inventory->prodid2}}" readonly>
        @if(is_null($inventory->product2))
            <select name="product2" id="product2" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
            <input type="text" style="border:0;" class="form-control" name="product2" value="{{$inventory->product2}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv2" value="{{$inventory->stockleft2}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount2" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price2" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid3" value="{{$inventory->prodid3}}" readonly>
        @if(is_null($inventory->product3))
            <select name="product3" id="product3" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product3" value="{{$inventory->product3}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv3" value="{{$inventory->stockleft3}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount3" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price3" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid4" value="{{$inventory->prodid4}}" readonly>
        @if(is_null($inventory->product4))
            <select name="product4" id="product4" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product4" value="{{$inventory->product4}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv4" value="{{$inventory->stockleft4}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount4" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price4" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid5" value="{{$inventory->prodid5}}" readonly>
        @if(is_null($inventory->product5))
            <select name="product5" id="product5" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product5" value="{{$inventory->product5}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv5" value="{{$inventory->stockleft5}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount5" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price5" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid6" value="{{$inventory->prodid6}}" readonly>
        @if(is_null($inventory->product6))
            <select name="product6" id="product6" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product6" value="{{$inventory->product6}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv6" value="{{$inventory->stockleft6}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount6" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price6" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid7" value="{{$inventory->prodid7}}" readonly>
        @if(is_null($inventory->product7))
            <select name="product7" id="product7" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product7" value="{{$inventory->product7}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv7" value="{{$inventory->stockleft7}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount7" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price7" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid8" value="{{$inventory->prodid8}}" readonly>
        @if(is_null($inventory->product8))
            <select name="product8" id="product8" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product8" value="{{$inventory->product8}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv8" value="{{$inventory->stockleft8}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount8" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price8" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid9" value="{{$inventory->prodid9}}" readonly>
        @if(is_null($inventory->product9))
            <select name="product9" id="product9" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product9" value="{{$inventory->product9}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv9" value="{{$inventory->stockleft9}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount9" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price9" value=""></td>
        </tr>

        <tr style=" background-color:white;">
        <td>
        <input type="hidden" style="border:0; font-size:16px;" name="prodid10" value="{{$inventory->prodid10}}" readonly>
        @if(is_null($inventory->product10))
            <select name="product10" id="product10" style="border:0;" class="form-control">
                <option value=""></option>
                    @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                    @endforeach
            </select>
        @else
        <input type="text" style="border:0;" class="form-control" name="product10" value="{{$inventory->product10}}" readonly>
        @endif
        </td>
        <td><input type="number" style="border:0;" class="form-control" name="endinv10" value="{{$inventory->stockleft10}}" readonly></td>
        <td><input type="number" style="border:0;" class="form-control" name="amount10" value=""></td>
        <td><input type="number" style="border:0;" class="form-control" name="price10" value=""></td>
        </tr>

    </table>
          
    <br>
    
    <button type="submit" class="btn btn-primary">Send Request</button>
    @endforeach
    </form>
    
    <hr>
@endsection