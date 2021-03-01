@extends('layouts.app')

@section('title', 'Edit Details for ' . $account->name)

@section('content')
    <h1> Edit Details for {{ $account->name }} </h1>

    <form action="{{ route('account.update', ['account' => $account]) }}" method="POST" enctype="multipart/form-data" class="pb-3">
        @method('PATCH')
        @include('account.form')
            
        <button type="submit" class="btn btn-primary">Save account</button>

    </form>

    <hr>
@endsection