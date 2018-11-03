<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IntlypCountry extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intlyp_country',function(Blueprint $table){
            $table->increments('countryid');
            $table->String('country_name_en')->nullable(false);
            $table->String('country_name_ar')->nullable(false);
            $table->integer('continent_id')->nullable(false)->DEFAULT('0');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('intlyp_country');
    }
}
