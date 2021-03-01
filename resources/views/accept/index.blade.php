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
             @foreach ($purchases as $purchase)
            <tr>
                <td>{{$purchase->id}}</td>
                <td><a href="{{ route('purchase.show', ['purchase' => $purchase]) }}">{{$purchase->name}}</a></td>
                <td>{{$purchase->address}}</td>
                <td>{{$purchase->type}}</td>
                <td>{{$purchase->status}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
