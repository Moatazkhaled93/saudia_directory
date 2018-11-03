<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GpCitiesEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp_cities_en', function (Blueprint $table) {
            $table->increments('city_id');
            $table->String ('city_name');
            $table->integer('district_id')->nullable(false);
        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gp_cities_en');
        }
}
