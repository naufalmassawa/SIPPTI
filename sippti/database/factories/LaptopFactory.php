<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nip' => Str::random(5),
            'nama' => Str::random(5),
            'jabatan' => Str::random(5),
            'no_seri' => Str::random(5),
            'merk' => Str::random(5),
            'tipe' => Str::random(5),
            'ram' => Str::random(5),
            'storage' => Str::random(5),
            'standart_alat' => Str::random(5),
            'fungsi' => Str::random(5),
            'spesifikasi' => Str::random(5),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
