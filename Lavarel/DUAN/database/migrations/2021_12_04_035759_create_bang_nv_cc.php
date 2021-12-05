<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangNvCc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_nv_cc', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('macc', 5);
            $table->primary(['manv', 'macc']);
            $table->foreign('manv')->references('manv')->on('bang_nhanvien');
            $table->foreign('macc')->references('macc')->on('bang_congcu');
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
        Schema::dropIfExists('bang_nv_cc');
    }
}
