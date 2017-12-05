<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissingPeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('nid');
            $table->integer('age');
            $table->string('gender');
            $table->string('photo');
            $table->string('father');
            $table->string('mother');
            $table->string('area');
            $table->date('missing_since');
            $table->string('clothes');
            $table->string('description');
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
        Schema::dropIfExists('missing_peoples');
    }
}
