<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.registration.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([

            'company_name' => 'required',
            'fax' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'postal_code' => 'required',
            'contact_person' => 'required',
            'city' => 'required',
            'industry_sector' => 'required',
            'nif' => 'required',
            'exhibition_product' => 'required',
            'country' => 'required',
            'payment' => 'required|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('payment')->store('registration');
        $registration = Registration::create([

            'company_name' => $request->company_name,
            'fax' => $request->fax,
            'address' => $request->address,
            'phone' => $request->phone,
            'postal_code' => $request->postal_code,
            'contact_person' => $request->contact_person,
            'city' => $request->city,
            'industry_sector' => $request->industry_sector,
            'nif' => $request->nif,
            'exhibition_product' => $request->exhibition_product,
            'country' => $request->country,

            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'site' => $request->site,
            'payment' =>  $file,
        ]);
        //Logger

        return redirect()->back()->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
