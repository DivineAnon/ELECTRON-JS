<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Activity;
use Exception;

class DailyReportController extends Controller
{
    protected $rules = [
        'no_unit' => 'required',
    ];

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

        return view('pages.daily-report', compact('activities', 'units'));
    }

    public function show($id)
    {
        $activity = Activity::find($id);
        return view('pages.daily-report', compact('activity'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'no_unit' => 'required|exists:activity,no_unit'
        ]);

        try {
            $activity = Activity::create([
                'no_unit' => $request->no_unit,
            ]);

            return view('pages/daily-activity', compact('activity'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        Activity::create($request->all());
        return redirect()->route('pages.daily-activity')->with('success', 'Activity Has Been Created');
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        return view('pages.daily-activity.index', compact('activity'));
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return redirect()->route('pages.daily-report.index')
            ->with('success', 'Biodata siswa deleted successfully');
    }
}
