<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishbursmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishbursments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('shareholder_id')->references('id')->on('users');
            $table->unsignedBigInteger('shareholder_id');
            $table->float('amount');
            $table->date('date');
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
        Schema::dropIfExists('dishbursments');
    }
}
