@extends('layouts.app')

@section('title', 'Add New Customer')

@section('content')
    <h1> Add New Account </h1>

    <form action="{{ route('account.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">

        @include('account.form')
            
        <button type="submit" class="btn btn-primary">Add Account</button>

    </form>

    <hr>
@endsection