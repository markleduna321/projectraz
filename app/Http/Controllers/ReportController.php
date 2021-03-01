<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Account;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct()
    {
         $this->middleware('permission:reports-list|reports-create|reports-edit|reports-delete', ['only' => ['index','store']]);
         $this->middleware('permission:reports-create', ['only' => ['create','store']]);
         $this->middleware('permission:reports-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:reports-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $annualnetincome = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-01-01', '2021-12-31'))->sum('netincome');

        $january = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-01-01', '2021-01-30'))->get();
        $jannet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-01-01', '2021-01-30'))->sum('netincome');

        $february = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-02-01', '2021-02-28'))->get();
        $febnet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-02-01', '2021-02-28'))->sum('netincome');

        $march = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-03-01', '2021-03-31'))->get();
        $marchnet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-03-01', '2021-03-31'))->sum('netincome');

        $april = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-04-01', '2021-04-30'))->get();
        $aprilnet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-04-01', '2021-04-30'))->sum('netincome');

        $may = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-05-01', '2021-05-31'))->get();
        $maynet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-05-01', '2021-05-31'))->sum('netincome');

        $june = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-06-01', '2021-06-30'))->get();
        $junenet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-06-01', '2021-06-30'))->sum('netincome');

        $jully = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-07-01', '2021-07-31'))->get();
        $jullynet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-07-01', '2021-07-31'))->sum('netincome');

        $august = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-08-01', '2021-08-31'))->get();
        $augnet = Report::whereBetween(DB::raw('DATE(created_at)'), array('2021-08-01', '2021-08-31'))->sum('netincome');

        return view('reports.index', compact('annualnetincome',
            'january','jannet', 
            'february','febnet', 
            'march','marchnet',
            'april','aprilnet',
            'may','maynet',
            'june','junenet',
            'jully','jullynet',
            'august','augnet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::all();

        return view('reports.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reports = Report::create($this->validateRequest());

        return redirect('reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    private function validateRequest(){

        return request()->validate([
            'accountname' => 'required',
            'grossinc' => 'required',
            'pharmacypercent' => 'required',
            'pharmacy' => 'required',
            'pharmacistpercent' => 'sometimes',
            'pharmacist' => 'sometimes',
            'doctorpercent' => 'required',
            'doctor' => 'required',
            'allocatedbudgetpercent' => 'sometimes',
            'allocatedbudget' => 'sometimes',
            'expensespercent' => 'required',
            'expenses' => 'required',
            'buildingpercent' => 'required',
            'building' => 'required',
            'deductionpercent' => 'required',
            'deduction' => 'required',
            'capital' => 'required',
            'totaldeduction' => 'required',
            'netincome' => 'required',
        ]);
    }
}
