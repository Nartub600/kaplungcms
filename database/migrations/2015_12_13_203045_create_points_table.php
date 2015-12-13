<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->integer('ecommerce_transaction_id');//te re cabio el nombre
            $table->integer('value');
            $table->timestamps();
            $table->integer('user_id')->unsigned();

            //keys
            $table->primary('ecommerce_transaction_id');
            //N points -> 1 User
            $table->foreign('user_id')->references('id')
              ->on('users')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('points');
    }
}
