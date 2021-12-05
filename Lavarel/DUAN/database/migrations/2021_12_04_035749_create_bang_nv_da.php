<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangNvDa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_nv_da', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('mada', 5);
            $table->primary(['manv', 'mada']);
            $table->foreign('manv')->references('manv')->on('bang_nhanvien');
            $table->foreign('mada')->references('mada')->on('bang_duan');
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
        Schema::dropIfExists('bang_nv_da');
    }
}
