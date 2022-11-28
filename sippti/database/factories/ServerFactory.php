<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'sub_unit' => Str::random(5),
            'ip_address' => Str::random(5),
            'merk' => Str::random(5),
            'type' => Str::random(5),
            'processor' => Str::random(5),
            'ram' => Str::random(5),
            'storage' => Str::random(5),
            'database' => Str::random(5),
            'konektivitas' => Str::random(5),
            'pemanfaatan_server' => Str::random(5),
            'operating_system' => Str::random(5),
            'lisensi_os' => Str::random(5),
            'join_domain' => Str::random(5),
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
