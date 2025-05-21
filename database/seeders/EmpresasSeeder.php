<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empresas')->insert([
            'nome' => 'Hugo Boss',
            'image_path' => 'img/hugoboss.jpg',
            'data' => '2023-10-01',
            'cargo' => 'Desenvolvedor Backend',
            'local' => 'São Paulo, SP',
            'beneficios' => 'Vale transporte, Vale refeição, Assistência médica',
            'perfilesperado' => 'Experiência em PHP, Laravel, MySQL',
            'horario' => '09:00 - 18:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
