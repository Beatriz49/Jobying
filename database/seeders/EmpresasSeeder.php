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
            'nome' => 'Hugo Boss',
            'image_path' => 'img/hugoboss.jpg',
            'data' => '2023-10-01',
            'cargo' => 'Desenvolvedor Backend',
            'local' => 'São Paulo, SP',
            'beneficios' => 'Vale transporte, Vale refeição, Assistência médica',
            'perfil_esperado' => 'Experiência em PHP, Laravel, MySQL',
            'horario_inicio' => '09:00',
            'horario_fim' => '18:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
