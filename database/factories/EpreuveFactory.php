<?php

namespace Database\Factories;

use App\Models\Epreuve;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpreuveFactory extends Factory
{
    protected $model = Epreuve::class;

    public function definition()
    {
        $matiereId = Matiere::inRandomOrder()->first()->id;
        return [
            'Numero' => $this->faker->randomNumber(4),
            'Date' => $this->faker->date(),
            'Lieu' => $this->faker->city,
            'matiere_id' => $matiereId,
        ];
    }
}
