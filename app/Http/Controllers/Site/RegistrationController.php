<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{  public function store(Request $request,$id)
    {
    $validation = $request->validate([

        'name' => 'required',
        'email' => 'required',
        'tel' => 'required',
        'bi' => 'required',

    ]);


    $registration = Registration::create([

        'name' => $request->name,
        'email' => $request->email,
        'tel' => $request->tel,
        'bi' => $request->bi,
        'fk_activity_program'=>$id

    ]);
    //Logger

    return redirect()->back()->with('create', '1');
}
}
