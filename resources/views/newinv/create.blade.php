@extends('layouts.app')


@section('content')

    <form action="{{ route('inventory.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">

        @include('inventory.form')
        
            
        <button type="submit" class="btn btn-primary">Send Request</button>

    </form>
    <hr>

@endsection