@extends('layouts.app')


@section('content')

    <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data" class="pb-3">

        @include('reports.form')
        
            
        <button type="submit" class="btn btn-primary">Send Request</button>

    </form>
    <hr>

@endsection