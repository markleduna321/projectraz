    @csrf
       <div class="form-group pb-3">
            <label for="name">Account Name:</label>
            <input type="text" name="name" value="{{old('name') ?? $account->name}}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="address">Address:</label>
            <input type="address" name="address" value="{{old('address') ?? $account->address}}" class="form-control">
            <div>{{ $errors->first('address') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control">
                    <option value="{{old('type') ?? $account->type}}"> {{old('type') ?? $account->type}} </option>
                    <option value="Hospital"> Hospital </option>
                    <option value="Pharmacy"> Pharmacy </option>
            </select>
            <div>{{ $errors->first('type') }}</div>
        </div>