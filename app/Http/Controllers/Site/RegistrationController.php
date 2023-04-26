<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Jobs\ExhibitorJob;
use App\Mail\RegistrationMail;
use App\Models\ProgramRegistraios;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{  public function store(Request $request)
    {



    $validation = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'tel' => 'required',
        'bi' => 'required',
        'eventSelect' => 'required',]);


    $registration = Registration::create([
        'name' => $request->name,
        'email' => $request->email,
        'tel' => $request->tel,
        'bi' => $request->bi,

    ]);
    for ($a = 0; $a < count($request->eventSelect); $a++) {
    ProgramRegistraios::create([
        'fk_registrations' => $registration->id,
        'fk_activity_program' => $request->eventSelect[$a],
    ]);


}


    //Logger

     //data to be included in the email
     //$response = Registration::with('programs')->find($registration->id);
     //Mail::to($registration->email)->send(new RegistrationMail($response));;
    return redirect()->back()->with('create', '1');
}
}
