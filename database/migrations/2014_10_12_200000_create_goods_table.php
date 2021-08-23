<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('goods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Boolean('isGlass');// 안경이나 선글라스냐 
            $table->string('name');
            $table->string('price');
            $table->string('img_url');
            $table->Boolean('isCustom');
            $table->Boolean('isNew');
            $table->Boolean('isBest');
            $table->Boolean('isSoldOut');
            $table->foreign('like_id')->references('id')->on('likes');
            $table->foreign('bag_id')->references('id')->on('bag');
            $table->foreign('buy_id')->references('id')->on('buy');
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
        Schema::dropIfExists('goods');
    }
}
