<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $deptos = [['departamento' => 'ATLANTIDA'],
        ['departamento' => 'Choluteca'],
        ['departamento' => 'Colón'],
        ['departamento' => 'Comayagua'],
        ['departamento' => 'Copán'],
        ['departamento' => 'Cortes'],
        ['departamento' => 'El Paraíso'],
        ['departamento' => 'Francisco Morazán'],
        ['departamento' => 'Gracias a Dios'],
        ['departamento' => 'Intibucá'],
        ['departamento' => 'Islas de la Bahía'],
        ['departamento' => 'La Paz'],
        ['departamento' => 'Lempira'],
        ['departamento' => 'Ocotepeque'],
        ['departamento' => 'Olancho'],
        ['departamento' => 'Santa Bárbara'],
        ['departamento' => 'Valle'],
        ['departamento' => 'Yoro']
    ];


        DB::table('departamentos')->insert(
            $deptos
        );
        //
    }
}
