<?php

namespace App\Http\Controllers;

use App\DailyActiviy;
use Illuminate\Http\Request;
use DB;
use App\Activity;
use App\UnitStatus;
use App\StandbyStatus;
use App\Operator;
use App\Aktifitas;
use App\Ritasi;
use App\Stanby;
use App\Material;
use App\Proses;
use App\BreakdownRadio;

class DailyActiviyController extends Controller
{
    public function index()
    {
        $stanby_status = StandbyStatus::join('activity', 'activity.no_unit', '=', 'stanby_status.id_activity')->join('stanby', 'stanby.id', '=', 'stanby_status.id_stanby')->select('stanby_status.*', 'stanby.kode', 'activity.no_unit')->get();
        $breakdowns = BreakdownRadio::join('unit_status', 'unit_status.no_unit', '=', 'breakdown_radio.no_unit')->join('type_unit', 'type_unit.id', '=', 'breakdown_radio.id_type_unit')->select('breakdown_radio.*', 'unit_status.no_unit', 'type_unit.nama')->where('id');
        $operators = Operator::all();
        $prosess = Proses::all();
        $materials = Material::all();
        $aktifitas = Aktifitas::all();
        $stanbys = Stanby::all();
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

        return view('pages.daily-activity', compact('stanby_status', 'units', 'operators', 'materials', 'aktifitas', 'stanbys', 'prosess'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DailyActiviy  $dailyActiviy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stanby = StandbyStatus::find($id);
        return view('pages.daily-report', compact('stanby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DailyActiviy  $dailyActiviy
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyActiviy $dailyActiviy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DailyActiviy  $dailyActiviy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DailyActiviy  $dailyActiviy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stanby = StandbyStatus::findOrFail($id);
        $stanby->delete();
        return redirect()->route('pages.daily-activity.index')
            ->with('success', 'Stanby Code deleted successfully');
    }
    public function destroyStanby($id)
    {
    }
}
