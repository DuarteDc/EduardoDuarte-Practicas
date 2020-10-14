<?php

namespace App\Http\Controllers;

use App\Alumnos;
use Illuminate\Http\Request;
use App\Http\Requests\Alumnosrequest;

class controllerAlumnos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAlumnos(){
        $alumnos = array(
            'nombre' => 'Eduardo ',
            'apellidos' => 'Duarte',
            'correo' => 'al221910409@gmail.com',
            'edad' => 19,
        );
        return response()->json($alumnos);
    }   


    //protected $alumnos;

    /*public function _construct(Alumnos $alumnos) {
        $this->Alumnos=$alumnos;
    }*/

    public function index()
    {
        //return view('alumnos');
        $alumnos = Alumnos::all();
        return ($alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*return $request;s
        $alumnos=$this->alumnos->create($request->all());
        return response()->json($alumnos);*/
        //return response()->json(new Alumnosrequest($alumnos),201);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $i=Alumnos::find($id);
        return ($i);
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
