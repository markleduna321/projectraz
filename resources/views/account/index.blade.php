@extends('layouts.app')

@section('title', 'About')

@section('content')
    
    <h1> Accounts </h1>
    <p><a href="{{ route('account.create') }}"> <button class="btn btn-primary">Add Account</button> </a></p>


    <table class="table table-bordered">

        <thead>
            <tr>
               <th> Account Name</th>
                <th>Address</th>
               <th> Type</th>    
            </tr>
        </thead>

        <tbody>
            @foreach ($accounts as $account)
            <tr>

               <td><a href="{{ route('account.show', ['account' => $account]) }}">{{$account->name}}</a></td>
                <td>{{$account->address}}</td>
               <td> {{$account->type}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection