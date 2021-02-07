<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Models\Estudiante;

use Illuminate\Http\Request;
use DB;

class proyectoController extends Controller
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
        $project = new Proyecto(
            [
                "titulo" => request("titulo"),
                "url" => request("url"),
                "descripcion" =>  request("descripcion")
            ]);

        $project-> save();

        return $this->show();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $listaproyectos = Proyecto::get();
        return view("proyectos")->with('listaproyectos', $listaproyectos);

    }
    public function mostrarproyecto($id)
    {
        $proyectos = DB::select("select * from proyectos where id=? ",[$id]);
        $listaestudiantes = Estudiante::get()->where('proyecto_id',$id);
        return view("mostrarproyecto")->with('listaestudiantes', $listaestudiantes)->with("proyectos",$proyectos);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        return view("actualizarproyecto")->with('proyecto', $proyecto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $proyecto = Proyecto::find(request("id"));
        $timestamp=now();

        $proyecto = DB::table("proyectos")->where('ID', $proyecto->id)->update([
            "titulo" => request("titulo"),
            "url" => request("url"),
            "descripcion" => request("text"),
            "updated_at" => $timestamp
        ]);

        return redirect()->route('listaproyecto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto::where('id', $id)->delete();

        return redirect()->route('listaproyecto');

    }
}
