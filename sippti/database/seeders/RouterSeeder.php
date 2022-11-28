<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Router;

class RouterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('routers')->insert([
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
        ]);*/
        Router::factory()
            ->count(50)
            ->create();
    }
}