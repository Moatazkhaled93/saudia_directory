<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class YpAreas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_areas',function(Blueprint $table){
            $table->increments('area_id');
            $table->String('area_name_en')->nullable(false);
            $table->String('area_name_ar')->nullable(false);
            $table->text('area_synonyms_en')->nullable(false);
            $table->text('area_synonyms_ar')->nullable(false);
            $table->integer('city_id')->nullable(false)->DEFAULT('0');
            $table->String('gps_latitude')->nullable(false);
            $table->String('gps_longitude')->nullable(false);
            $table->integer('added_by')->nullable(false);
            $table->datetime('added_date')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->datetime('modified_date')->nullable(false);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yp_areas');
    }
}
