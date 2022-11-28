<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**DB::table('laptop')->insert([
            'no' => Str::random(5),
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
        ]);*/
        Laptop::factory()
            ->count(50)
            ->create();
        //
    }
}
