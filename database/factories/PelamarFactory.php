<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "email" => $this->faker->safeEmail,
            "nohp" => $this->faker->phoneNumber,
            "departemen" => $this->faker->randomElement([
                "Engineer",
                "HR",
                "Finance",
                "Marketing",
                "Commercial"
            ]),
            "k1_pengalaman" => $this->faker->numberBetween(1, 5),
            "k2_pendidikan" => $this->faker->numberBetween(1, 5),
            "k3_psikologi" => $this->faker->numberBetween(1, 5),
            "k4_keahlian" => $this->faker->numberBetween(1, 5),
            "k5_umur" => $this->faker->numberBetween(1, 3),
            "k6_toefl" => $this->faker->numberBetween(1, 4),
            "k7_ipk" => $this->faker->randomFloat(2, 1, 4),
            "rekomendasi" => $this->faker->randomElement([
                "Diterima",
                "Tidak Diterima"
            ]),
        ];
    }
}
