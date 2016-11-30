<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
//            $table->increments('id');
//            $table->date('pdate');
//            $table->integer('cheque_id')->unsigned()->nullable();
//            $table->integer('token_id')->unsigned()->nullable();
//            $table->integer('total');
//            $table->integer('cash')->nullable();
//            $table->foreign('cheque_id')->references('id')->on('cheques')->onDelete('cascade');
//            $table->foreign('token_id')->references('id')->on('tokens')->onDelete('cascade');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
