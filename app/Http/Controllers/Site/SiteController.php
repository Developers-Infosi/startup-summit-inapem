<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ActivityProgram;
use App\Models\Ehibitor;
use App\Models\News;
use App\Models\Schedule;
use App\Models\Speaker;

class SiteController extends Controller
{
    public function index()
    {
        $response['site'] = 'Home';

        /* programs & activities */
        $response['schedulesI'] = ActivityProgram::where('day', 'I')->get();
        $response['schedulesII'] = ActivityProgram::where('day', 'II')->get();
        $response['schedulesIII'] = ActivityProgram::where('day', 'III')->get();

        $response['ehibitor']= Ehibitor::get();

        return view('site.home.index', $response);
    }
}
