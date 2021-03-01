    @csrf
    
    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Account Name &nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 275px">
            <select name="accountname" class="form-control">
                <option value=""> </option>
                 @foreach ($accounts as $account)
                    <option value="{{$account->name}}"> {{$account->name}}</option>
                @endforeach
                </select>
        <div>{{ $errors->first('accountname') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Gross Income &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 275px">
        <input type="number" name="grossinc" value="" placeholder="Gross Income"class="form-control">
        <div>{{ $errors->first('grossinc') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Pharmacy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="pharmacypercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('pharmacypercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="pharmacy" value="" placeholder="Pharmacy"class="form-control">
            <div>{{ $errors->first('pharmacy') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div  class="input-group-prepend" >
          <span class="input-group-text" id="">Pharmacist &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="pharmacistpercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('pharmacistpercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="pharmacist" value="" placeholder="Pharmacist"class="form-control">
            <div>{{ $errors->first('pharmacist') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="doctorpercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('doctorpercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="doctor" value="" placeholder="Doctor"class="form-control">
            <div>{{ $errors->first('doctor') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Allocated Budget :&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="allocatedbudgetpercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('allocatedbudgetpercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="allocatedbudget" value="" placeholder="Allocated budget"class="form-control">
            <div>{{ $errors->first('allocatedbudget') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Expenses &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="expensespercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('expensespercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="expenses" value="" placeholder="Expenses"class="form-control">
            <div>{{ $errors->first('expenses') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Building &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="buildingpercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('buildingpercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="building" value="" placeholder="Building"class="form-control">
            <div>{{ $errors->first('building') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 70px">
            <input type="text" name="deductionpercent" value="" placeholder="%..." class="form-control">
            <div>{{ $errors->first('deductionpercent') }}</div>
        </div>
        <div class="col-xs-2">
            <input type="number" name="deduction" value="" placeholder="Total"class="form-control">
            <div>{{ $errors->first('deduction') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Capital &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 275px">
        <input type="number" name="capital" value="" placeholder="Capital"class="form-control">
        <div>{{ $errors->first('capital') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Total Deduction : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 275px">
        <input type="number" name="totaldeduction" value="" placeholder="Total Deduction"class="form-control">
        <div>{{ $errors->first('totaldeduction') }}</div>
        </div>
    </div>

    <div class="input-group pb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="">Net Income &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</span>
        </div>
        <div style="width: 275px">
        <input type="number" name="netincome" value="" placeholder="Net Income"class="form-control">
        <div>{{ $errors->first('netincome') }}</div>
        </div>
    </div>



    