<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangNvNn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_nv_nn', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('mann', 5);
            $table->primary(['manv', 'mann']);
            $table->foreign('manv')->references('manv')->on('bang_nhanvien');
            $table->foreign('mann')->references('mann')->on('bang_ngoaingu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bang_nv_nn');
    }
}
