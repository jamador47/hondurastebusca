<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\departamento;
use  App\Models\refugio;
use  App\Models\refugiado;
use  App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class refugiadosController extends Controller
{

    public function importExportView()
    {
       return view('import');
    }

    public function verbusqueda(Request $request){
        $refugiados   =   refugiado::orderBy("nombre",'ASC')->get();
        return view('buscar', ['personas'=>null,'refugiados' => $refugiados, 'status'=>null]);
    }
    public function busqueda(Request $request){
        $refugiados   =   refugiado::orderBy("nombre",'ASC')->get();
        $personas  =   refugiado::where("nombre",$request->nombre)->get();
        return view('buscar', ['personas'=>$personas,'refugiados' => $refugiados, 'status'=>null]);
    }


    public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
           
       return back();
    }

    public function veragregarrefugiado(Request $request){
        $departamentos = departamento::all();
        $refugios   =   DB::table('refugiados')->select('refugio')->distinct()->get();
        $refugiados   =   refugiado::orderBy("nombre",'ASC')->get();
       // var_dump($refugios);
       return view('addrefugiado', ['refugiados' => $refugiados, 'departamentos' => $departamentos, 'refugios' => $refugios, 'status'=>null]);
    }
    public function agregarrefugiado(Request $request){
        $refugiados   =   refugiado::orderBy("nombre",'ASC')->get();

        $user = refugiado::where('nombre',$request->nombre)->first();
        if ($user == null){
        if ($request->refugios_id == "otro"){
            //CREAR NUEVO REFUGIO.
        $refugio = new refugio;
        $refugio->nombre = $request->nuevo_refugio;
        $refugio->departamentos_id = $request->departamentos_id;
        $refugio->save();
        $request->refugios_id = $refugio->id;
        }

        $refugiado = new refugiado;
        $refugiado->departamentos_id = $request->departamentos_id;
        $refugiado->refugio = $request->refugio;
        $refugiado->nombre = $request->nombre;
        $refugiado->identidad = $request->identidad;
        $refugiado->telefono = $request->telefono;
        $refugiado->save();
     
    }
    $departamentos = departamento::all();
    $refugios   =   refugio::all();
        return view('addrefugiado', ['refugiados' => $refugiados, 'departamentos' => $departamentos, 'refugios' => $refugios, 'status'=>'Refugiado Agregado!']);
    }
    public function veragregarrefugio(Request $request){
        $departamentos = departamento::all();
        return view('addrefugio', ['departamentos' => $departamentos, 'status'=>null]);

    }
    public function agregarrefugio(Request $request){
        $departamentos = departamento::all();
        $refugio = new refugio;
        $refugio->nombre = $request->nombre;
        $refugio->departamentos_id = $request->departamentos_id;
        $refugio->save();
        return view('addrefugio', ['departamentos' => $departamentos, 'status'=>'Refugio Agregado']);
    }


    function fetch(Request $request)
    {
     $select = $request->get('select');
     $value = $request->get('value');
     var_dump($select,$value);
     $refugios = DB::table('refugios')
          ->where($select, "=", $value)
          ->get();
        $output = '';
    if($request->get('dependent') == "refugios_id"){
        foreach($refugios as $row)
        {
            $output .= '<option value="'.$row->id.'">'.$row->nombre.'</option>';
        }
        echo $output;
    }


    }
    //
}
