<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pay', function (Blueprint $table) {
            $table->id();
            $table->string('price')->comment("결제금액");
            $table->string('approval_num')->comment("승인번호");
            $table->string('order_num')->comment("주문번호");
            $table->string('order_name')->comment("주문자명");
            $table->string('payment_date')->comment("결제일시");
            $table->string('card_type')->comment("카드종류");
            $table->string('installment_period')->comment("할부기간");
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('buy_id');
            $table->foreign('buy_id')->references('id')->on('buys');
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
        Schema::dropIfExists('pay');
    }
}
