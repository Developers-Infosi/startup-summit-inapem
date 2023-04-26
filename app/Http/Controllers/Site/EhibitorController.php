<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Ehibitor;
use Illuminate\Http\Request;

class EhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['ehibitor'] = Ehibitor::get();;
        return view('site.schedule.index', $response);
    }


}
