<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class YpBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yp_brands',function(Blueprint $table){
            $table->increments('brand_id');
            $table->String('brand_name_en')->nullable(false);
            $table->String('brand_name_ar')->nullable(false);
            $table->text('synonyms_en')->nullable(false);
            $table->text('synonyms_ar')->nullable(false);
            $table->integer('company_count')->nullable(false);
            $table->String('brand_logo')->nullable(false);
            $table->String('brand_logo_ar')->nullable(false);
            $table->integer('added_by')->nullable(false);
            $table->datetime('added_date')->nullable(false);
            $table->integer('modified_by')->nullable(false);
            $table->datetime('modified_date')->nullable(false);
            $table->integer('width')->nullable(false);
            $table->integer('height')->nullable(false);
            $table->String('meta_title_en')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');
            $table->String('meta_title_ar')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');
            $table->String('meta_desc_en')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');
            $table->String('meta_desc_ar')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');
            $table->String('meta_keywords_en')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');
            $table->String('meta_keywords_ar')->nullable(false)->CHARACTERSETutf8()->DEFAULT('NULL');



        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yp_brands');
    }
}
