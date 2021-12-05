<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangNvKn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_nv_kn', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('makn', 5);
            $table->primary(['manv', 'makn']);
            $table->foreign('manv')->references('manv')->on('bang_nhanvien');
            $table->foreign('makn')->references('makn')->on('bang_kynang');
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
        Schema::dropIfExists('bang_nv_kn');
    }
}
