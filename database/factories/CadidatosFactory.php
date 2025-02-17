<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidato>
 */
class CandidatoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'idade' => $this->faker->numberBetween(18, 60),
            'foto' => $this->faker->imageUrl(200, 200, 'people'), // Gera uma URL de imagem fictícia
            'skills' => $this->faker->words(5, true), // Gera 5 habilidades aleatórias
            'experiencias' => $this->faker->paragraph(),
            'trabalhos' => $this->faker->paragraph(),
            'procurando' => $this->faker->sentence(),
        ];
    }
}
