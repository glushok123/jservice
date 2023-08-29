<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->index();
            $table->string('title', 255)->nullable();
            $table->string('slug', 255)->index();
            $table->string('image', 255)->nullable();
            $table->string('small_image', 255)->nullable();

            $table->string('seo_title', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

            $table->boolean('active')->default(1);
            $table->bigInteger('sub_category_id')->unsigned()->index();

            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('repair_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_brands');
    }
}
