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
            $table->foreign('owner_id')->references('id')->on('owner');
            //$table->bigincrements('id');
            $table->id();
            $table->Boolean('isGlass')->default(0);// 안경이나 선글라스냐 
            $table->string('name')->comment("상품명");
            $table->string('price')->comment("가격");
            $table->string('img_url');
            $table->Boolean('isCustom')->default(0);
            $table->Boolean('isNew')->default(0);
            $table->Boolean('isBest')->default(0);
            $table->Boolean('isSoldOut')->default(0);
            $table->foreign('like_id')->references('id')->on('likes');
            $table->foreign('bag_id')->references('id')->on('bag');
            $table->foreign('buy_id')->references('id')->on('buy');
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
