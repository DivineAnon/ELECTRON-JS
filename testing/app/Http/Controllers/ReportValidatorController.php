<?php

namespace App\Http\Controllers;

use App\ReportValidator;
use Illuminate\Http\Request;

class ReportValidatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::join('unit_status', 'unit_status.no_unit', '=', 'activity.no_unit')->select('activity.*', 'unit_status.loading_point', 'unit_status.dumping_area', 'unit_status.status')->get();
        $units = Activity::all();
        foreach ($units as $value) {
            $no_lama = $value->no_unit;
            $no = 1;
            if ($no_lama) {
                $units = $no_lama + 1;
            } else {
                $units = $no;
            }
        }
        echo $units;

        return view('pages.daily-report-validator', compact('activities', 'units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReportValidator  $reportValidator
     * @return \Illuminate\Http\Response
     */
    public function show(ReportValidator $reportValidator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportValidator  $reportValidator
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportValidator $reportValidator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportValidator  $reportValidator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportValidator $reportValidator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportValidator  $reportValidator
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportValidator $reportValidator)
    {
        //
    }
}
