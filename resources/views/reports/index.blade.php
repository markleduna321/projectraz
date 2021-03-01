@extends('layouts.app')


@section('content')

            <h1> Reports </h1>
    
    <!-- New Report Link -->
    @can('reports-create')
        <a class="btn btn-success" href="{{ route('reports.create') }}"> Add New Report </a>
    @endcan
    
    <br>
    <br>

    <table class="table table-bordered table-dark table-hover ">
        <thead>
            <tr>
                <th style="width: 250px">Annual Net Income</th>
                <td style="text-align: center">{{$annualnetincome}}</td>
            </tr>
        </thead>
    </table>

    <div class="table-responsive">
        <h3>Month of January</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
               <th>Month</th>
               <th>Account Name</th>
               <th>Gross Income</th>
               <th> Pharmacy</th> 
               <th> Pharmacist</th>  
               <th> Doctor</th>
               <th> Allocated Budget</th>
               <th> Expenses</th>   
               <th> Building</th>
               <th> Total</th>
               <th> Capital</th>  
               <th> Total Deduction</th>  
               <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($january as $jan)
                <tr>
                    <td> {{ $jan->created_at->format('M - Y') }} </td>
                    <td>{{$jan->accountname}}</td>
                    <td> {{$jan->grossinc}} </td>
                    <td> ({{$jan->pharmacypercent}}) {{$jan->pharmacy}}</td>
                    <td> ({{$jan->pharmacistpercent}}) {{$jan->pharmacist}}</td>
                    <td> ({{$jan->doctorpercent}}) {{$jan->doctor}}</td>
                    <td> ({{$jan->allocatedbudgetpercent}}) {{$jan->allocatedbudget}}</td>   
                    <td> ({{$jan->expensespercent}}) {{$jan->expenses}}</td>
                    <td> ({{$jan->buildingpercent}}) {{$jan->building}}</td>  
                    <td> ({{$jan->deductionpercent}}) {{$jan->deduction}}</td>   
                    <td> {{$jan->capital}}</td>  
                    <td> {{$jan->totaldeduction}}</td>  
                    <td> {{$jan->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $jannet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of February</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
               <th>Month</th>
               <th>Account Name</th>
               <th>Gross Income</th>
               <th> Pharmacy</th> 
               <th> Pharmacist</th>  
               <th> Doctor</th>
               <th> Allocated Budget</th>
               <th> Expenses</th>   
               <th> Building</th>
               <th> Total</th>
               <th> Capital</th>  
               <th> Total Deduction</th>  
               <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($february as $feb)
                <tr>
                    <td> {{ $feb->created_at->format('M - Y') }} </td>
                    <td>{{$feb->accountname}}</td>
                    <td> {{$feb->grossinc}} </td>
                    <td> ({{$feb->pharmacypercent}}) {{$feb->pharmacy}}</td>
                    <td> ({{$feb->pharmacistpercent}}) {{$feb->pharmacist}}</td>
                    <td> ({{$feb->doctorpercent}}) {{$feb->doctor}}</td>
                    <td> ({{$feb->allocatedbudgetpercent}}) {{$feb->allocatedbudget}}</td>   
                    <td> ({{$feb->expensespercent}}) {{$feb->expenses}}</td>
                    <td> ({{$feb->buildingpercent}}) {{$feb->building}}</td>  
                    <td> ({{$feb->deductionpercent}}) {{$feb->deduction}}</td>   
                    <td> {{$feb->capital}}</td>  
                    <td> {{$feb->totaldeduction}}</td>  
                    <td> {{$feb->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $febnet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of March</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
               <th>Month</th>
               <th>Account Name</th>
               <th>Gross Income</th>
               <th> Pharmacy</th> 
               <th> Pharmacist</th>  
               <th> Doctor</th>
               <th> Allocated Budget</th>
               <th> Expenses</th>   
               <th> Building</th>
               <th> Total</th>
               <th> Capital</th>  
               <th> Total Deduction</th>  
               <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($march as $mar)
                <tr>
                    <td> {{ $mar->created_at->format('M - Y') }} </td>
                    <td> {{$mar->accountname}}</td>
                    <td> {{$mar->grossinc}} </td>
                    <td> ({{$mar->pharmacypercent}}) {{$mar->pharmacy}}</td>
                    <td> ({{$mar->pharmacistpercent}}) {{$mar->pharmacist}}</td>
                    <td> ({{$mar->doctorpercent}}) {{$mar->doctor}}</td>
                    <td> ({{$mar->allocatedbudgetpercent}}) {{$mar->allocatedbudget}}</td>   
                    <td> ({{$mar->expensespercent}}) {{$mar->expenses}}</td>
                    <td> ({{$mar->buildingpercent}}) {{$mar->building}}</td>  
                    <td> ({{$mar->deductionpercent}}) {{$mar->deduction}}</td>   
                    <td> {{$mar->capital}}</td>  
                    <td> {{$mar->totaldeduction}}</td>  
                    <td> {{$mar->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $marchnet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of April</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
            <th>Month</th>
            <th>Account Name</th>
            <th>Gross Income</th>
            <th> Pharmacy</th> 
            <th> Pharmacist</th>  
            <th> Doctor</th>
            <th> Allocated Budget</th>
            <th> Expenses</th>   
            <th> Building</th>
            <th> Total</th>
            <th> Capital</th>  
            <th> Total Deduction</th>  
            <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($april as $apr)
                <tr>
                    <td> {{ $apr->created_at->format('M - Y') }} </td>
                    <td>{{$apr->accountname}}</td>
                    <td> {{$apr->grossinc}} </td>
                    <td> ({{$apr->pharmacypercent}}) {{$apr->pharmacy}}</td>
                    <td> ({{$apr->pharmacistpercent}}) {{$apr->pharmacist}}</td>
                    <td> ({{$apr->doctorpercent}}) {{$apr->doctor}}</td>
                    <td> ({{$apr->allocatedbudgetpercent}}) {{$apr->allocatedbudget}}</td>   
                    <td> ({{$apr->expensespercent}}) {{$apr->expenses}}</td>
                    <td> ({{$apr->buildingpercent}}) {{$apr->building}}</td>  
                    <td> ({{$apr->deductionpercent}}) {{$apr->deduction}}</td>   
                    <td> {{$apr->capital}}</td>  
                    <td> {{$apr->totaldeduction}}</td>  
                    <td> {{$apr->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $aprilnet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of May</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
            <th>Month</th>
            <th>Account Name</th>
            <th>Gross Income</th>
            <th> Pharmacy</th> 
            <th> Pharmacist</th>  
            <th> Doctor</th>
            <th> Allocated Budget</th>
            <th> Expenses</th>   
            <th> Building</th>
            <th> Total</th>
            <th> Capital</th>  
            <th> Total Deduction</th>  
            <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($may as $my)
                <tr>
                    <td> {{ $my->created_at->format('M - Y') }} </td>
                    <td>{{$my->accountname}}</td>
                    <td> {{$my->grossinc}} </td>
                    <td> ({{$my->pharmacypercent}}) {{$my->pharmacy}}</td>
                    <td> ({{$my->pharmacistpercent}}) {{$my->pharmacist}}</td>
                    <td> ({{$my->doctorpercent}}) {{$my->doctor}}</td>
                    <td> ({{$my->allocatedbudgetpercent}}) {{$my->allocatedbudget}}</td>   
                    <td> ({{$my->expensespercent}}) {{$my->expenses}}</td>
                    <td> ({{$my->buildingpercent}}) {{$my->building}}</td>  
                    <td> ({{$my->deductionpercent}}) {{$my->deduction}}</td>   
                    <td> {{$my->capital}}</td>  
                    <td> {{$my->totaldeduction}}</td>  
                    <td> {{$my->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $maynet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of June</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
            <th>Month</th>
            <th>Account Name</th>
            <th>Gross Income</th>
            <th> Pharmacy</th> 
            <th> Pharmacist</th>  
            <th> Doctor</th>
            <th> Allocated Budget</th>
            <th> Expenses</th>   
            <th> Building</th>
            <th> Total</th>
            <th> Capital</th>  
            <th> Total Deduction</th>  
            <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($june as $jun)
                <tr>
                    <td> {{ $jun->created_at->format('M - Y') }} </td>
                    <td>{{$jun->accountname}}</td>
                    <td> {{$jun->grossinc}} </td>
                    <td> ({{$jun->pharmacypercent}}) {{$jun->pharmacy}}</td>
                    <td> ({{$jun->pharmacistpercent}}) {{$jun->pharmacist}}</td>
                    <td> ({{$jun->doctorpercent}}) {{$jun->doctor}}</td>
                    <td> ({{$jun->allocatedbudgetpercent}}) {{$jun->allocatedbudget}}</td>   
                    <td> ({{$jun->expensespercent}}) {{$jun->expenses}}</td>
                    <td> ({{$jun->buildingpercent}}) {{$jun->building}}</td>  
                    <td> ({{$jun->deductionpercent}}) {{$jun->deduction}}</td>   
                    <td> {{$jun->capital}}</td>  
                    <td> {{$jun->totaldeduction}}</td>  
                    <td> {{$jun->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $junenet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of July</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
            <th>Month</th>
            <th>Account Name</th>
            <th>Gross Income</th>
            <th> Pharmacy</th> 
            <th> Pharmacist</th>  
            <th> Doctor</th>
            <th> Allocated Budget</th>
            <th> Expenses</th>   
            <th> Building</th>
            <th> Total</th>
            <th> Capital</th>  
            <th> Total Deduction</th>  
            <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($jully as $jul)
                <tr>
                    <td> {{ $jul->created_at->format('M - Y') }} </td>
                    <td>{{$jul->accountname}}</td>
                    <td> {{$jul->grossinc}} </td>
                    <td> ({{$jul->pharmacypercent}}) {{$jul->pharmacy}}</td>
                    <td> ({{$jul->pharmacistpercent}}) {{$jul->pharmacist}}</td>
                    <td> ({{$jul->doctorpercent}}) {{$jul->doctor}}</td>
                    <td> ({{$jul->allocatedbudgetpercent}}) {{$jul->allocatedbudget}}</td>   
                    <td> ({{$jul->expensespercent}}) {{$jul->expenses}}</td>
                    <td> ({{$jul->buildingpercent}}) {{$jul->building}}</td>  
                    <td> ({{$jul->deductionpercent}}) {{$jul->deduction}}</td>   
                    <td> {{$jul->capital}}</td>  
                    <td> {{$jul->totaldeduction}}</td>  
                    <td> {{$jul->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $jullynet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>

<br>

    <div class="table-responsive">
        <h3>Month of August</h3>
    <!-- Table -->
    <table class="table table-striped table-dark table-hover ">
        <!-- Table Head -->
        <thead>
            <tr>
            <th>Month</th>
            <th>Account Name</th>
            <th>Gross Income</th>
            <th> Pharmacy</th> 
            <th> Pharmacist</th>  
            <th> Doctor</th>
            <th> Allocated Budget</th>
            <th> Expenses</th>   
            <th> Building</th>
            <th> Total</th>
            <th> Capital</th>  
            <th> Total Deduction</th>  
            <th> Net Income</th>
            </tr>
        </thead>
        <!-- Table Head End -->

        <!-- Table Body -->
        <tbody>
            @foreach($august as $aug)
                <tr>
                    <td> {{ $aug->created_at->format('M - Y') }} </td>
                    <td>{{$aug->accountname}}</td>
                    <td> {{$aug->grossinc}} </td>
                    <td> ({{$aug->pharmacypercent}}) {{$aug->pharmacy}}</td>
                    <td> ({{$aug->pharmacistpercent}}) {{$aug->pharmacist}}</td>
                    <td> ({{$aug->doctorpercent}}) {{$aug->doctor}}</td>
                    <td> ({{$aug->allocatedbudgetpercent}}) {{$aug->allocatedbudget}}</td>   
                    <td> ({{$aug->expensespercent}}) {{$aug->expenses}}</td>
                    <td> ({{$aug->buildingpercent}}) {{$aug->building}}</td>  
                    <td> ({{$aug->deductionpercent}}) {{$aug->deduction}}</td>   
                    <td> {{$aug->capital}}</td>  
                    <td> {{$aug->totaldeduction}}</td>  
                    <td> {{$aug->netincome}}</td>  
                </tr>
            @endforeach
                <tr>
                    <td colspan="12">Total Net Income</td>
                    <td>{{ $augnet }}</td>
                </tr>
        </tbody>
        <!-- Table Body End -->
    </table>
    <!-- Table End -->
    </div>



@endsection