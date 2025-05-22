<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Candidato;
use Illuminate\Support\Facades\DB;

class CandidatoSeeder extends Seeder
{
    public function run(): void
    {
        Candidato::create([
            'name' => 'João Silva',
            'idade' => 28,
            'path' => 'Marega.jpg',
            'skills' => 'PHP, Laravel, JavaScript',
            'experiencias' => '2 anos como desenvolvedor backend',
            'procurando' => 'Vaga de desenvolvedor pleno',
                    'trabalhos' => 'Empresa X, Empresa Y',
                ]);
            }
        }
