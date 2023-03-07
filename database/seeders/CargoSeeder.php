<?php

namespace Database\Seeders;

use App\Models\Cargo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cargo::create([
            'nombreCargo' => 'guarda',
        ]);

        Cargo::create([
            'nombreCargo' => 'administrador',
        ]);
        Cargo::create([
            'nombreCargo' => 'asistente',
        ]);

        Cargo::create([
            'nombreCargo' => 'colaborador',
        ]);
    }
}
