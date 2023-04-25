<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
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

        $response['feedback'] = Feedback::get();

        //Logger
        $this->Logger->log('emergency', 'Listou os feedback ');
        return view('admin.feedback.list.index', $response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['feedback'] = Feedback::find($id);


        //Logger
        $this->Logger->log(
            'emergency',
            'Visualizar um feedback com o identificador ' . $id
        );
        return view('admin.feedback.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['feedback'] = Feedback::find($id);
        //Logger
        $this->Logger->log(
            'emergency',
            'Entrou em editar um inscrito com o identificador ' . $id
        );
        return view('admin.feedback.edit.index', $response);
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


        Feedback::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'bi' => $request->bi,

        ]);
        //Logger
        $this->Logger->log('emergency', 'Editou um inscrito com o identificador ' . $id);

        return redirect()->route('admin.feedback.show', $id)->with('edit', '1');
    }
}
