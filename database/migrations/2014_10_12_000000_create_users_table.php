<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->string('user_name')->comment("이름");
            $table->string('user_id')->unique()->comment("아이디");
            $table->string('password')->comment("비밀번호");;
            $table->string('email')->unique()->comment("이메일");
            $table->string('tel')->unique()->comment("연락처");
            $table->boolean('private')->default(0)->comment("개인정보 확인 유무");
            $table->boolean('third_party')->default(0)->comment("제3자 제공 유무");
            $table->string('address')->comment("주소");
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
        Schema::dropIfExists('users');
    }
}
