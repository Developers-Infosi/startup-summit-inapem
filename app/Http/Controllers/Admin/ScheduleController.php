<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\ActivityProgram;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {

        $response['schedules'] = ActivityProgram::get();
        //Logger
        $this->Logger->log('info', 'Listou os Programas & Actividades');
        return view('admin.schedule.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em criar um programa & actividade');
        return view('admin.schedule.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'activity' => 'required|string|min:5|max:255',
            'conference' => 'required|string|min:5|max:255',

            'start' => 'required|date',
            'end' => 'required|date',

        ]);

        $schedule = ActivityProgram::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou um programa & actividade com o titulo ' . $schedule->program);

        return redirect()->route("admin.schedule.show", $schedule->id)->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['schedule'] = ActivityProgram::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um programa & actividade com o identificador ' . $id);
        return view('admin.schedule.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['schedule'] = ActivityProgram::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um programa & actividade com o identificador ' . $id);
        return view('admin.schedule.edit.index', $response);
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
        $request->validate([
            'activity' => 'required|string',
            'conference' => 'required|string',

            'start' => 'required|date',
            'end' => 'required|date',
        ]);


        ActivityProgram::find($id)->update($request->all());

        //Logger
        $this->Logger->log('info', 'Editou um programa & actividade com o identificador ' . $id);
        return redirect()->route("admin.schedule.show", $id)->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou um programa & actividade com o identificador ' . $id);
        ActivityProgram::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
