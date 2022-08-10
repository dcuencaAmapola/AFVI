<?php

namespace App\Http\Controllers;

use App\Models\FirstCallReport;
use Illuminate\Http\Request;
use App\Http\Requests\SaveReportRequest;

class FirstCallReportController extends Controller
{
    /**
     * Display a listing of the resource.
     * Bring all the active reports from de DB
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $firstCallReports = FirstCallReport::where('active_first_call_report', 1)->get();
        return view('firstCallReport.index', [
            'firstCallReports' => $firstCallReports
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('firstCallReport.create',[
            'firstCallReport' => new FirstCallReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveReportRequest $request)
    {
        //dd($request);
        $fields = $request->validated();
        FirstCallReport::create($fields);//por asigancion masiva
        return redirect()->route('firstCallReport.index')->with('status','Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstCallReport  $firstCallReport
     * @return \Illuminate\Http\Response
     */
    public function show(FirstCallReport $firstCallReport)
    {
        /*return view('firstCallReport.show',[
            'firstCallReport' => $firstCallReport
        ]);*/
        return view('firstCallReport.show', compact('firstCallReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstCallReport  $firstCallReport
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstCallReport $firstCallReport)
    {
        return view('firstCallReport.edit',[
            'firstCallReport' => $firstCallReport
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstCallReport  $firstCallReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstCallReport $firstCallReport)
    {
        $firstCallReport->update($request->validated());
        return redirect()->route('firstCallReport.show',$firstCallReport)->with('status','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstCallReport  $firstCallReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstCallReport $firstCallReport)
    {
        $firstCallReport->update([
            'active_first_call_report' => 0,
        ]);
        //return $project;
        return redirect()->route('firstCallReport.index')->with('status','Updated Successfully');
    }
}
