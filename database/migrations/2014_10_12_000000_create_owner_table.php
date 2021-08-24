<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name')->comment("이름");
            $table->string('owner_id')->unique()->comment("아이디");
            $table->string('password')->comment("비밀번호");;
            $table->string('email')->unique()->comment("이메일");
            $table->string('tel')->unique()->comment("연락처");
            $table->boolean('private')->default(0)->comment("개인정보 확인 유무");
            $table->boolean('third_party')->default(0)->comment("제3자 제공 유무");//근데 관리자 테이블에 이게 필요할까..?
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
        Schema::dropIfExists('owner');
    }
}
