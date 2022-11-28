<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->string('sub_unit');
            $table->string('ip_address');
            $table->string('merk');
            $table->string('type');
            $table->string('processor');
            $table->string('ram');
            $table->string('storage');
            $table->string('database');
            $table->string('konektivitas');
            $table->string('pemanfaatan_server');
            $table->string('operating_system');
            $table->string('lisensi_os');
            $table->string('join_domain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
