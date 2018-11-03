<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GpContactsEn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gp_contacts_en',function(Blueprint $table){
            $table->increments('contact_id');
            $table->String ('contact_name');
            $table->String('contact_number')->nullable(false);
            $table->integer('directory_id')->nullable(false);
            $table->integer('district_id')->nullable(false);
            $table->integer('city_id')->nullable(false);
            $table->integer('department_id')->nullable(false);
            $table->integer('subdepartment_id')->nullable(false);
            $table->String('url')->nullable(false);
            $table->String('email')->nullable(false);
            $table->String('fax')->nullable(false);
            $table->text('address')->nullable(false);








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExistes('gp_contacts_en');
    }
}
