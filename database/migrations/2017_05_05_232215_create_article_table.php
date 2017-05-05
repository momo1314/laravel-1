<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class',function(Blueprint $table){
            $table->increments('id');
            $table->text('name')->nullable();
            $table->string('sex');
            $table->integer('class');
            $table->integer('majorNum');
            $table->text('major')->nullable();
            $table->text('college')->nullable();
            $table->integer('grade');
            $table->text('status')->nullable();
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
