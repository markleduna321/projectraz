@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1> Contact Us </h1>

    
        <form action="/contact" method="POST">

    <div class="form-group pb-3">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            <div>{{ $errors->first('name') }}</div>
        </div>
            
        <div class="form-group pb-3">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{old('email')}}" class="form-control">
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group pb-3">
            <label for="message">Message:</label>
            <textarea name="message" id="message" value="{{old('message')}}" cols="30" rows="10" class="form-control"></textarea>
            <div>{{ $errors->first('message') }}</div>
        </div>

        @csrf
        
        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>
    

@endsection