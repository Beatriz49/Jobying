<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresas;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empresas::create([
            'name' => 'Hugo Boss',
            'path' => 'hugoboos.jpg',
            'data' => '2023-10-01',
            'cargo' => 'Desenvolvedor Backend',
            'local' => 'São Paulo, SP',
            'beneficios' => 'Vale transporte, Vale refeição, Assistência médica',
        ]);


    }
}
