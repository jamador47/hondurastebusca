<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefugiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $refugios = [['nombre'=>'105 brigada','departamentos_id' => '6'],
     ['nombre'=>'Alberge Manuel Pagán Lozano','departamentos_id' => '6'],
     ['nombre'=>'Albergue Manuel Pagán Lozano','departamentos_id' => '6'],
     ['nombre'=>'Albergue Washington Academy - Barrio Las Acacias 2 y 3 Avenida 14 Calle','departamentos_id' => '6'],
     ['nombre'=>'Albergue Washington Academy- Barrio Las Acacias 2 y 3 Avenida 14 calle','departamentos_id' => '6'],
     ['nombre'=>'Barandillas','departamentos_id' => '6'],
     ['nombre'=>'Cabañas','departamentos_id' => '6'],
     ['nombre'=>'Campo Agas','departamentos_id' => '6'],
     ['nombre'=>'Campo gas','departamentos_id' => '6'],
     ['nombre'=>'Casa de un tío aurora','departamentos_id' => '6'],
     ['nombre'=>'Casa familiar Cabañas','departamentos_id' => '6'],
     ['nombre'=>'Casa Familiar en Cabañas','departamentos_id' => '6'],
     ['nombre'=>'Colonia Bueso - Sector Bajos de Choloma','departamentos_id' => '6'],
     ['nombre'=>'en la padimentada de la entrada de la planeta lima','departamentos_id' => '6'],
     ['nombre'=>'Esc.Republica','departamentos_id' => '6'],
     ['nombre'=>'Esc.Republica de Honduras','departamentos_id' => '6'],
     ['nombre'=>'Escuela República de Honduras','departamentos_id' => '6'],
     ['nombre'=>'Expo centro','departamentos_id' => '6'],
     ['nombre'=>'Expocentro','departamentos_id' => '6'],
     ['nombre'=>'Hotel Monte Sinaí - Colonia Moderna','departamentos_id' => '6'],
     ['nombre'=>'Hotel Monte Sinaí- Colonia Moderna','departamentos_id' => '6'],
     ['nombre'=>'Iglesia Cuadrangular de Satelite','departamentos_id' => '6'],
     ['nombre'=>'Iglesia cuadrangular de satélite','departamentos_id' => '6'],
     ['nombre'=>'Iglesia satélite cuadrangular de satélite','departamentos_id' => '6'],
     ['nombre'=>'La casona san juan viejo','departamentos_id' => '6'],
     ['nombre'=>'la lima','departamentos_id' => '6'],
     ['nombre'=>'La Planeta','departamentos_id' => '6'],
     ['nombre'=>'lima','departamentos_id' => '6'],
     ['nombre'=>'Los que trarn fe San Juan Viejo','departamentos_id' => '6'],
     ['nombre'=>'Majoncho Sosa 33 Calle','departamentos_id' => '6'],
     ['nombre'=>'Majoncho Sosa 33 calle sector la Union','departamentos_id' => '6'],
     ['nombre'=>'Majoncho Sosa Sector La Union','departamentos_id' => '6'],
     ['nombre'=>'Majoncho sosa sector La unión','departamentos_id' => '6'],
     ['nombre'=>'No sé en cuál están ellos viven en la celeo gonzales','departamentos_id' => '6'],
     ['nombre'=>'No tienen','departamentos_id' => '6'],
     ['nombre'=>'Peniel','departamentos_id' => '6'],
     ['nombre'=>'Piña Loca - Catraburguer','departamentos_id' => '6'],
     ['nombre'=>'Potrerillos','departamentos_id' => '6'],
     ['nombre'=>'Regufio en casa en San Juan Viejo La lima (La Cazona)','departamentos_id' => '6'],
     ['nombre'=>'San Pedro Sula','departamentos_id' => '6'],
     ['nombre'=>'Se juntó con familia','departamentos_id' => '6']
    ];
        
        


        DB::table('refugios')->insert(
            $refugios
        );
        //
    }
}
