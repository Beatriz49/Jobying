<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Candidato;

class CandidatoSeeder extends Seeder
{
    public function run(): void
    {
        Candidato::factory(10)->create(); // Gera 10 candidatos fictícios
    }
}
