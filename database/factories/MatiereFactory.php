<?php

namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    protected $model = Matiere::class;

    public function definition()
    {
        $coeff = [1, 1.5, 4, 0.5];

        return [
            'Codemat' => $this->faker->unique()->lexify('???'),
            'libelle' => $this->faker->sentence(1),
            'coef' => $this->faker->randomElement($coeff), 
        ];
    }
}
