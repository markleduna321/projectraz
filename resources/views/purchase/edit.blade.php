@extends('layouts.app')

@section('title', 'Edit Details for ' . $purchase->name)

@section('content')
    <h1> Edit Details for {{ $purchase->name }} </h1>

    <form action="{{ route('purchase.update', ['purchase' => $purchase]) }}" method="POST" enctype="multipart/form-data" class="pb-3">
        @method('PATCH')
        @include('purchase.form')
            
        <button type="submit" class="btn btn-primary">Update Order</button>

    </form>

    <hr>
@endsection