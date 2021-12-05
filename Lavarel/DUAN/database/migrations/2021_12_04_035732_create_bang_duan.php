<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangDuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_duan', function (Blueprint $table) {
            $table->string('mada', 5);
            $table->string('tenda', 20);
            $table->string('anhda', 20);
            $table->string('motada', 2000);
            $table->primary('mada');
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
        Schema::dropIfExists('bang_duan');
    }
}
