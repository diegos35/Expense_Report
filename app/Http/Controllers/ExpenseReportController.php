<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseReports;
use Illuminate\Http\Request;
use App\Models\ExpenseReport;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return ExpenseReport::all();
        return view('expenseReport.index',[
            'expenseReports' => ExpenseReport::all() //expenseReports debe llamarse igual que el template foreach
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport.create'); //where is the view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExpenseReports $request)
    {   
        // $validateData = $request->validate([
        //     'title' =>'required|min:3'
        // ]);  

        $report = new ExpenseReport();
        $report->title =  $request->title;
        $report->save();

        return redirect('/expense_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = ExpenseReport::findOrFail($id);
        return view('expenseReport.edit',[
            'report' => $report 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $report = ExpenseReport::find($id);
        $report->title = $request->get('title');
        $report->save();
        
        return redirect('expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::find($id);
        $report->delete();
        
        return redirect('expense_reports');
    }


    public function confirmDelete($id){
        $report = ExpenseReport::find($id);
        return view('expenseReport.confirmDelete',[
            'report' => $report
        ]);
    }
}
