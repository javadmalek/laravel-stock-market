<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsTable extends Migration
{
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('_user_id');

            $table->string('title');
            $table->string('description')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::drop('markets');
    }
}
