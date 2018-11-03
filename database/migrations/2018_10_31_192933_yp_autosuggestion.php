<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class YpAutosuggestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_autosuggestion',function(Blueprint $table){
            $table->increments('id');
            $table->String('name_en')->nullable(false);
            $table->String('name_ar')->nullable(false);
            $table->text('synonyms_en')->nullable(false);
            $table->text('synonyms_ar')->nullable(false);
            $table->String('city_name_en')->nullable(false);
            $table->String('city_name_ar')->nullable(false);
            $table->integer('directory_id')->nullable(false);
            $table->integer('city_id')->nullable(false);
            $table->integer('area_id')->nullable(false);
            $table->smallinteger('display_order')->nullable(false);



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yp_autosuggestion');
    }
}
