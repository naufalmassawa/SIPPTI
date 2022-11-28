<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            /**$table->timestamps();*/

            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('no_seri');
            $table->string('merk');
            $table->string('tipe');
            $table->string('ram');
            $table->string('storage');
            $table->string('standart_alat');
            $table->string('fungsi');
            $table->string('spesifikasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
