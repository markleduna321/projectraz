@extends('layouts.app')

@section('title', 'Request')

@section('content')

        <h1> Request Orders </h1>
        <br>

    <!-- New Request Link -->
    @if(!empty(Auth::user()->getRoleNames()))
        @foreach(Auth::user()->getRoleNames() as $v)
            @if($v === 'User')
                <a href="{{ route('purchase.create') }}">
                <button class="btn btn-warning">
                    Send Request (New)
                </button>
                </a>
            @else
            @endif
        @endforeach
    @endif
    <!-- New Request Link End -->

    <!-- Current/Update Request Link -->
    @if(!empty(Auth::user()->getRoleNames()))
        @foreach(Auth::user()->getRoleNames() as $v)
            @if($v === 'User')
                <a href="{{ route('reqcurrent.create') }}">
                <button class="btn btn-primary">
                    Send Request (Current)
                </button>
                </a>
            @else
            @endif
        @endforeach
    @endif
    <!-- Current/update Request Link End -->

    <!-- Accept Link -->
    @can('accept-create')
        <a class="btn btn-success" href="{{ route('accept.create') }}"> Accept Request </a>
    @endcan
    <!-- Accept Link End -->

     <br>
     <br>

    <!-- Table -->
    <table class="table table-bordered">
        <!-- Table Head -->
        <thead>
            <tr>
               <th>Purchase ID</th>
               <th>Account Name</th>
               <th> Address</th> 
               <th> Contact #</th>  
               <th> Type</th>       
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($purchases as $purchase)
                @if(!empty(Auth::user()->getRoleNames()))
                    @foreach(Auth::user()->getRoleNames() as $v)
                        @if ($purchase->user_email === Auth::user()->email or $v === 'Admin' or $v === 'Staff')
                        <tr>
                        <td> {{$purchase->id}} </td>
                        <td> {{$purchase->name}} </td>
                        <td> {{$purchase->address}} </td>
                        <td> {{$purchase->contact}} </td>
                        @if($purchase->status === "Pending")
                            <td class="btn-warning"> {{$purchase->status}} </td>
                        @elseif($purchase->status === "Processed")
                            <td class="btn-primary"> {{$purchase->status}} </td>
                        @elseif($purchase->status === "Completed")
                            <td class="btn-success"> {{$purchase->status}} </td>
                        @endif
                        
                        </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->

    <!-- Pagination Link -->
    {{$purchases->links('pagination::bootstrap-4')}}

    <!-- Page Auto Reload -->
    <script>
    function autoRefresh()
    {
        window.location = window.location.href;
    }
     setInterval('autoRefresh()', 600000);
    </script>
@endsection
                       