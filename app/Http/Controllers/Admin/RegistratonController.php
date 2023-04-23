<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistratonController extends Controller
{
    private $Logger;
    private $random;
    private $Show;

    public function __construct()
    {
        $this->Logger = new Logger();


    }

    public function index()
    {

        $response['registrations'] = Registration::orderBy('id', 'desc')->get();

        //Logger
        $this->Logger->log('emergency', 'Listou os Inscritos para o ANGOTIC');
        return view('admin.registration.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['registration'] = Registration::find($id);


        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizar um inscrito com o identificador ' . $id
        );
        return view('admin.registration.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['registration'] = Registration::find($id);
        //Logger
        $this->Logger->log(
            'emergency',
            'Entrou em editar um inscrito com o identificador ' . $id
        );
        return view('admin.registration.edit.index', $response);
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
            'payment' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('payment')) {
            $file = $request->file('payment')->store('registration');
        } else {
            $file = Registration::find($id)->payment;
        }

        Registration::find($id)->update([

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
        $this->Logger->log('emergency', 'Editou um inscrito com o identificador ' . $id);

        return redirect()->route('admin.registration.show', $id)->with('edit', '1');
    }

}
