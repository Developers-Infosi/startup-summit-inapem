<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
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

    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
               //
        $response['ehibitor'] = Ehibitor::get();
        //Logger
        $this->Logger->log('info', 'Listou as expositores');
        return view('admin.ehibitor.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->Logger->log('info', 'Cadastrar uma Expositor');
        return view('admin.ehibitor.create.index');
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
            'title' => 'required|min:5|max:255',
            'product' => 'required|min:3|max:255',
            'description' => 'required|min:5'

        ]);

        $ehibitor = Ehibitor::create([
            'title' => $request->title,
            'product' => $request->product,
            'description' => $request->description,

        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou um expositor com o titulo - ' . $ehibitor->title);
        return redirect("admin/expositores/show/$ehibitor->id")->with('create', '1');
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
        $response['ehibitor'] = Ehibitor::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um expositor com o identificador ' . $id);
        return view('admin.ehibitor.details.index', $response);
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
        $response['ehibitor'] = Ehibitor::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um expositor com o identificador ' . $id);
        return view('admin.ehibitor.edit.index', $response);
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
            'title' => 'required|min:5|max:255',
            'product' => 'required|min:3|max:255',
            'description' => 'required|min:5',

        ]);
        Ehibitor::find($id)->update([
            'title' => $request->title,
            'product' => $request->product,
            'description' => $request->description,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma Notícia com o identificador ' . $id);
        return redirect("admin/expositores/show/$id")->with('edit', '1');
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
        //Logger
        $this->Logger->log('info', 'Eliminou um expositor com o identificador ' . $id);
        Ehibitor::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
