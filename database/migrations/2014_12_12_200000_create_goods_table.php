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
        Schema::create('goods', function (Blueprint $table) {
            //$table->foreign('owner_id')->references('id')->on('owner');
            //$table->bigincrements('id');
            $table->bigincrements('id');
            $table->boolean('is_glass')->default(0);// 안경이나 선글라스냐 
            $table->string('name')->comment("상품명");
            $table->bigInteger('price')->comment("가격"); 
            $table->boolean('is_custom')->default(0);
            $table->boolean('is_new')->default(0);
            $table->boolean('is_best')->default(0);
            $table->boolean('is_soldout')->default(0);
            $table->boolean('is_public')->default(0);
            $table->unsignedBigInteger('like_id');
            $table->unsignedBigInteger('bag_id');
            $table->unsignedBigInteger('buy_id');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('like_id')->references('id')->on('likes');
            $table->foreign('bag_id')->references('id')->on('bags');
            $table->foreign('buy_id')->references('id')->on('buys');
            $table->foreign('owner_id')->references('id')->on('owner');
            $table->rememberToken();
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
