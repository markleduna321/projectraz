@extends('layouts.app')

@section('title', 'Edit Details for ' . $inventory->name)

@section('content')
    <center><h1> Completing Order #{{ $inventory->id }} </h1></center>
<br>
    <form action="{{ route('inventory.update', ['inventory' => $inventory]) }}" method="POST" enctype="multipart/form-data" class="pb-3">
        @method('PATCH')
        @include('inventory.form')
            
        <button type="submit" class="btn btn-primary">Finish Order</button>

    </form>

    <hr>
@endsection