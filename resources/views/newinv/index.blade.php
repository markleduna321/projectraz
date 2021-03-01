@extends('layouts.app')


@section('content')

            <h1> Inventory </h1>
    
    

<table class="table table-bordered">

        <thead>
            <tr>
               <th>Inventory ID</th>
                <th>Account Name</th>
               <th> DATE/TIME</th> 
               <th> User</th>  
               <th> Type</th>   
               <th> Status</th>   
               <th> Action</th>    
            </tr>
        </thead>

        <tbody>

             @foreach($inventories as $inventory)
            
            <tr>
                <td> {{$inventory->id}} </td>
                <td>
                @if($inventory->status === 'Processed')
                    {{$inventory->name}}
                @elseif($inventory->user_email === Auth::user()->email or Auth::user()->getRoleNames() === 'Admin')
                    <a href="{{ route('inventory.show', ['inventory' => $inventory]) }}">{{$inventory->name}}</a>
                @else
                {{$inventory->name}}
                @endif
                </td>
                <td> {{$inventory->created_at}} </td>
                <td> {{$inventory->user_email}} </td>
                <td> {{$inventory->type}} </td>
                
                
                @if($inventory->status === 'Completed')
                <td style=" background-color:green;">
                    {{$inventory->status}}</a></td>
                @else
                    <td style=" background-color:red;">
                    {{$inventory->status}}</a></td>
                @endif
                
                <td>
                
                @if(!empty(Auth::user()->getRoleNames()))
                        @foreach(Auth::user()->getRoleNames() as $v)
                        @if($v === 'Staff' or $v === 'Admin' and $inventory->status === 'Processed')

                            <a href="{{ route('inventory.edit', ['inventory' => $inventory]) }}"> 
                            <button class="btn btn-primary">Complete Process </button></a>

                        @elseif($v === 'Staff' or $v === 'Admin' and $inventory->status === 'Completed')

                            <button class="btn btn-primary disabled">Complete Process </button>
                        
                        @else

                        @endif
                        @endforeach
                        @endif
                </td>
            </tr>
             
             @endforeach
        
        </tbody>
    </table>


@endsection