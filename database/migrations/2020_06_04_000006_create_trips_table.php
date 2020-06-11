<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_from');
            $table->date('date_to');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
