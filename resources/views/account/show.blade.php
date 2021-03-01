@extends('layouts.app')

@section('title', 'Deatails for ' . $account->name)

@section('content')
    <h1> Deatails for {{ $account->name }} </h1>

    <p><a href="{{ route('account.edit', ['account' => $account]) }}"> Edit </a></p>
    <form action="{{ route('account.destroy', ['account' => $account]) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger"> Delete </button>
    </form>
<br>
      <p><b>Name: </b>{{$account->name}} </p>
            
      <p><b>Address: </b>{{$account->address}}</p>
            
      <p><b> Type: </b> {{$account->type}}</p>

@endsection