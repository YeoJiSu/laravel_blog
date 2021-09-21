<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateOwnerIdToQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // php artisan make:migration update_owner_id_to_question_table --table=questions
    public function up()
    {
        Schema::table('questions', function (Blueprint $table) {
            // composer require doctrine/dbal 실행해야함
            $table->unsignedBigInteger('owner_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questions', function (Blueprint $table) {
            //
        });
    }
}
