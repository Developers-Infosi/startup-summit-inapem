<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Jobs\RegistrationJob;
use App\Models\ProgramRegistraios;


class RegistrationController extends Controller
{
    public function store(Request $request)
    {

        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'bi' => 'required',
            'eventSelect' => 'required',
        ]);


        $data = Registration::create([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'bi' => $request->bi,

        ]);
        for ($a = 0; $a < count($request->eventSelect); $a++) {
            ProgramRegistraios::create([
                'fk_registrations' => $data->id,
                'fk_activity_program' => $request->eventSelect[$a],
            ]);
        }

        $registration = Registration::find($data->id);
        RegistrationJob::dispatch($registration)->delay(now()->addSeconds('2'));

        return redirect()->back()->with('create', '1');
    }
}
