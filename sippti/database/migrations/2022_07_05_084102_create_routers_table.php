<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->string('unit');
            $table->string('isp');
            $table->string('service_type');
            $table->string('sid');
            $table->string('bandwith');
            $table->string('ip_lan');
            $table->string('ip_gateway');
            $table->string('ip_wan');
            $table->string('merk');
            $table->string('serial_number');
            $table->string('model');
            $table->string('security');
            $table->string('backup');
            $table->string('keterangan');
            $table->string('tahun_pengadaan');
            $table->string('status');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('status_har_lan');
            $table->string('tahun_har_lan');
            $table->string('user_mikrotik0');
            $table->string('pass_mikrotik0');
            $table->string('user_mikrotik1');
            $table->string('pass_mikrotik1');
            $table->string('security_mikrotik');
            $table->string('firewall');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routers');
    }
}