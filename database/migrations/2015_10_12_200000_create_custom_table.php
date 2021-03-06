<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('goods_id');
            $table->foreign('goods_id')->references('id')->on('goods');
            $table->string('name')->comment('옵션이름');
            $table->bigInteger('price')->comment('추가가격'); //이 옵션이름과 가격은 "add" column에 사용됨. 
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
        Schema::dropIfExists('custom');
    }
}