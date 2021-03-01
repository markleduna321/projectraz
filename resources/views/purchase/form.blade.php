    
    @csrf

    <!-- Echo Accounts -->
    @foreach($accounts->slice(0,1) as $account)
          
          <!-- user email hidden -->
        <input type="hidden" name="user_email" value="{{ Auth::user()->email }}" class="form-control">
        <div>{{ $errors->first('user_email') }}</div>

        <!-- order ID hidden -->
        <input type="hidden" name="orderid" value="{{ $account->id }}" class="form-control">
        <div>{{ $errors->first('orderid') }}</div>

        <!-- Account Name -->
        <div class="form-group pb-3">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{$account->name}}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <!-- Address -->
        <div class="form-group pb-3">
            <label for="address">Address:</label>
            <input type="text" name="address" value="{{$account->address}}" class="form-control">
            <div>{{ $errors->first('address') }}</div>
        </div>

        <!-- Type(hospital/pharma hidden) -->
        <div class="form-group pb-3">
            <input type="hidden" name="type" value="{{$account->type}}" class="form-control">
            <div>{{ $errors->first('type') }}</div>
        </div>

    @endforeach
    <!-- Echo Accounts End -->
        
        <!-- Contact Person -->
        <div class="form-group pb-3">
            <label for="conact">Contact Person:</label>
            <input type="text" name="contact" value="{{old('contact')}}" autocomplete="off" class="form-control">
            <div>{{ $errors->first('contact') }}</div>
        </div>

        <!-- Contact # -->
        <div class="form-group pb-3">
            <label for="phone">Contact #:</label>
            <input type="text" name="phone" value="{{old('phone')}}" autocomplete="off" class="form-control">
            <div>{{ $errors->first('phone') }}</div>
        </div>

        <!-- Status hidden -->
        <div class="form-group pb-3">
            <input type="hidden" name="status" value="Pending" class="form-control" readonly>
            <div>{{ $errors->first('status') }}</div>
        </div>

        <!-- Table -->
        <table width="50%" border="3" cellpadding="0" cellspacing="0" class="table table-bordered"   > 
        
            <!-- Table Head -->
            <thead>
                <tr>
                    <th style=" background-color:#4CAF50; width:55%;">Product</th>
                    <th style=" background-color:#4CAF50;">QTY</th>
                    <th style=" background-color:#4CAF50;">Price</th>
                </tr>
            </thead>
            <!-- Table Head End -->

            <!-- Table Body -->
            <tbody>
                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid" value="0" class="form-control">
                        <div>{{ $errors->first('prodid') }}</div>
                        <select name="product" id="product" style="border:0;" class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid2" value="0" class="form-control">
                        <div>{{ $errors->first('prodid2') }}</div>
                        <select name="product2" id="product2" style="border:0; " class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount2" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price2" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid3" value="0" class="form-control">
                        <div>{{ $errors->first('prodid3') }}</div>
                        <select name="product3" id="product3" style="border:0; " class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount3" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price3" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid4" value="0" class="form-control">
                        <div>{{ $errors->first('prodid4') }}</div>
                        <select name="product4" id="product4" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount4" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price4" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid5" value="0" class="form-control">
                        <div>{{ $errors->first('prodid5') }}</div>
                        <select name="product5" id="product5" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount5" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price5" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid6" value="0" class="form-control">
                        <div>{{ $errors->first('prodid6') }}</div>
                        <select name="product6" id="product6" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount6" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price6" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid7" value="0" class="form-control">
                        <div>{{ $errors->first('prodid7') }}</div>
                        <select name="product7" id="product7" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount7" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price7" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid8" value="0" class="form-control">
                        <div>{{ $errors->first('prodid8') }}</div>
                        <select name="product8" id="product8" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount8" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price8" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid9" value="0" class="form-control">
                        <div>{{ $errors->first('prodid9') }}</div>
                        <select name="product9" id="product9" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount9" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price9" value=""class="form-control"></td>
                </tr>

                <tr style=" background-color:white;">
                    <td>
                        <input type="hidden" name="prodid10" value="0" class="form-control">
                        <div>{{ $errors->first('prodid10') }}</div>
                        <select name="product10" id="product10" style="border:0; "class="form-control">
                        <option value=""></option>
                        @foreach ($products as $product)
                        <option value="{{$product->product}}"> {{$product->product}} </option>
                        @endforeach
                        </select>
                    </td>
                    <td><input type="number" style="border:0; " name="amount10" value=""class="form-control"></td>
                    <td><input type="number" style="border:0; " name="price10" value=""class="form-control"></td>
                </tr>
            </tbody>
            <!-- Table Body End -->

        </table>
        <!-- Table End -->
