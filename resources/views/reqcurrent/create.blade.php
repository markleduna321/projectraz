@extends('layouts.app')

@section('title', 'Add New Order')

@section('content')

    <h1> Request Order (Current/Update)</h1>
    <br>

    <div class="form-group pb-3">
        <form action="/searchcurr" method="get">
            <label for="search">Generate PO Data:</label>
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </span>
            </div>
        </form>    
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
               <th>Order ID</th>
                <th>Account Name</th>
               <th> Date</th>   
               <th> Type</th>    
            </tr>
        </thead>

        <tbody>
             @foreach ($lemons as $lemon)
                @if ($lemon->user_email === Auth::user()->email)    
                    <tr>
                        <td>{{$lemon->id}}</td>
                        <td>{{$lemon->name}}</a></td>
                        <td>{{$lemon->updated_at}}</td>
                        <td>{{$lemon->type}}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Link -->
    {{$lemons->links('pagination::bootstrap-4')}}

    <hr>
@endsection