<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Hash;

class RouterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unit' => Str::random(5),
            'isp' => Str::random(5),
            'service_type' => Str::random(5),
            'sid' => Str::random(5),
            'bandwith' => Str::random(5),
            'ip_lan' => Str::random(5),
            'ip_gateway' => Str::random(5),
            'ip_wan' => Str::random(5),
            'merk' => Str::random(5),
            'serial_number' => Str::random(5),
            'model' => Str::random(5),
            'security' => Str::random(5),
            'backup' => Str::random(5),
            'keterangan' => Str::random(5),
            'tahun_pengadaan' => Str::random(5),
            'status' => Str::random(5),
            'latitude' => Str::random(5),
            'longitude' => Str::random(5),
            'status_har_lan' => Str::random(5),
            'tahun_har_lan' => Str::random(5),
            'user_mikrotik0' => Str::random(5),
            'user_mikrotik1' => Str::random(5),
            'security_mikrotik' => Str::random(5),
            'firewall' => Str::random(5),
            'pass_mikrotik0' => Hash::make('password'),
            'pass_mikrotik1' => Hash::make('password'),
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