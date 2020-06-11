<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTripsTable extends Migration
{
    public function up()
    {
        Schema::table('trips', function (Blueprint $table) {
            $table->unsignedInteger('city_from_id');
            $table->foreign('city_from_id', 'city_from_fk_1587040')->references('id')->on('cities');
            $table->unsignedInteger('city_to_id');
            $table->foreign('city_to_id', 'city_to_fk_1587042')->references('id')->on('cities');
        });
    }
}
