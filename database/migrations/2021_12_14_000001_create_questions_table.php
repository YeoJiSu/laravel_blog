<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            // nullable이 가능한 필드에 nullable() 추가한다.
            // nullable 이란? 데이터가 생성될 때 필요 없는(필수값) 칼럼을 말한다.
            // ex) $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('owner');
            $table->boolean('is_public')->default(0)->comment('공개유무');
            $table->string('type')->comment('타입'); //배송, 교환/반품 , 기타
            $table->string('title')->comment('제목');
            $table->string('content')->comment('내용');
            $table->string('answer')->comment('답변');
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
        Schema::dropIfExists('questions');
    }
}
