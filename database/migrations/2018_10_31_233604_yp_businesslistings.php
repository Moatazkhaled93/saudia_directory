<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class YpBusinesslistings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('yp_businesslistings',function(Blueprint $table){
            $table->increments('listingid');
            $table->String('companyname')->nullable(false);
            $table->String('companyname_ar')->nullable(false);
            $table->integer('category_id')->nullable(false);
            $table->String('businessname')->nullable(false);
            $table->String('address')->nullable(false);
            $table->integer('city_id')->nullable(false);
            $table->String('emailid')->nullable(false);
            $table->integer('area_id')->nullable(false);
            $table->String('contactname')->nullable(false);
            $table->String('phonenumber')->nullable(false);
            $table->String('mobilenumber')->nullable(false);
            $table->Smallinteger('advertise_in')->nullable(false);
            $table->Char('moreinfo')->nullable(false);
            $table->String('landmark')->nullable(false);
            $table->String('preferredtime_from')->nullable(false);
            $table->String('preferredtime_to')->nullable(false);
            $table->String('language')->nullable(false);
            $table->integer('added_by')->nullable(false);
            $table->datetime('added_date')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->datetime('modified_date')->nullable(false);
            $table->String('longitude')->nullable(false);
            $table->String('latitude')->nullable(false);


        });
    }
    

 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yp_businesslistings');
    }
}