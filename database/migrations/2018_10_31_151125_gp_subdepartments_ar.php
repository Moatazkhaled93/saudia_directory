<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GpSubdepartmentsAr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp_subdepartments_ar',function(Blueprint $table){
            $table->increments('subdepartment_id');
            $table->String('subdepartment_name')->nullable(false);
            $table->integer('department_id')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gp_subdepartments_ar');
    }
}
