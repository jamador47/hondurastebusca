<?php
  
namespace App\Imports;
  
use App\Models\refugiado;
use Maatwebsite\Excel\Concerns\ToModel;
  
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $user = refugiado::where('nombre',$row[1])->first();
//var_dump($row[1]);
        if($user == null && $row[1] != null){
            $refugiado = new refugiado;
            $refugiado->nombre = $row[1];
            $refugiado->refugio = $row[2];
            $refugiado->telefono = $row[3];
            $refugiado->edad = $row[4];
            $refugiado->identidad = $row[5];
            $refugiado->save();
        }
    }
}