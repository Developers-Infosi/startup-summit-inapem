<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ActivityProgram;
use App\Models\Schedule;

class ScheduleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* programs & activities */
        $response['schedulesI'] = ActivityProgram::where('day', 'I')->get();
        $response['schedulesII'] = ActivityProgram::where('day', 'II')->get();
        $response['schedulesIII'] = ActivityProgram::where('day', 'III')->get();

        return view('site.schedule.index', $response);
    }


}
