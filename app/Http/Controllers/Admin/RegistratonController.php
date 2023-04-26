<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ProgramRegistraios;
use App\Models\Registration;
use Illuminate\Http\Request;
use Symfony\Component\Console\Helper\ProgressIndicator;

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
        $this->Logger->log('emergency', 'Listou os Inscritos ');
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

     $response['registration'] = Registration::with('programs')->find($id);
     $response['programRegistraios'] = ProgramRegistraios::where('fk_registrations',$id)->get();

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
            'name' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'bi' => 'required',
        ]);


        Registration::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'bi' => $request->bi,

        ]);
        //Logger
        $this->Logger->log('emergency', 'Editou um inscrito com o identificador ' . $id);

        return redirect()->route('admin.registration.show', $id)->with('edit', '1');
    }
}
