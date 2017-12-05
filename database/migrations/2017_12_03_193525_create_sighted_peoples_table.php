<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSightedPeoplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sighted_peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->text('mfname');
            $table->text('mlname');
            $table->date('date');
            $table->text('time');
            $table->text('location');
            $table->text('cctv');
            $table->text('description');
            $table->text('clothes');
            $table->text('sname');
            $table->text('email');
            $table->text('phone');
            $table->text('address');
            $table->text('police');
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
        Schema::dropIfExists('sighted_peoples');
    }
}
