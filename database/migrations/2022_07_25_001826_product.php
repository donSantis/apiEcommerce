<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id_product');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->string('title');
            $table->string('description');
            $table->integer('price');
            $table->string('image');
            $table->boolean('state2');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
        Schema::table('product', function($table) {
            $table->foreign('id_user')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
