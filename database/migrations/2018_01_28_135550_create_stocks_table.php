<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('_user_id');
            $table->bigInteger('_company_id');
            $table->bigInteger('_market_id');

            $table->string('type');
            $table->string('price');
            $table->string('description')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::drop('stocks');
    }
}
