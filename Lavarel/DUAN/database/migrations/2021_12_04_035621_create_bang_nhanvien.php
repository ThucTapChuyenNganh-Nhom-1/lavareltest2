<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBangNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bang_nhanvien', function (Blueprint $table) {
            $table->string('manv', 5);
            $table->string('honv', 20);
            $table->string('tennv', 20);
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->string('anhnv', 20);
            $table->string('sothich', 2000);
            $table->string('diachi', 100);
            $table->string('sdt', 20);
            $table->unique('sdt');
            $table->string('email', 120);
            $table->unique('email');
            $table->string('gioithieunv', 2000);
            $table->string('truongdh', 120);
            $table->string('chuyennganh', 120);
            $table->string('macv', 5);
            $table->primary('manv');
            $table->foreign('macv')->references('macv')->on('bang_chucvu');
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
        Schema::dropIfExists('bang_nhanvien');
    }
}
