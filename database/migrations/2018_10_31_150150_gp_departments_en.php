<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GpDepartmentsEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('gp_departments_en',function(Blueprint $table){
            $table->increments('department_id');
            $table->String('department_name')->nullable(false);
            $table->integer('city_id')->nullable(false);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gp_departments_en');
    }
}
