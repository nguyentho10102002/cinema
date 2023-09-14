<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyen_xes', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nha_xe');
            $table->string('slug_ten_nha_xe')->unique();
            $table->string('noi_xuat_phat');
            $table->string('noi_ket_thuc');
            $table->string('loai_xe');
            $table->integer('thoi_gian_chay');
            $table->date('ngay_bat_dau_chay');
            $table->string('avatar');
            $table->text('mo_ta');
            $table->string('trailer');
            $table->integer('tinh_trang');
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
        Schema::dropIfExists('chuyen_xes');
    }
};
