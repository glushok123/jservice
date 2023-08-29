<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->index();
            $table->string('title', 255)->index();
            $table->string('slug', 255);

            $table->string('min_price', 255)->nullable();
            $table->string('min_time', 255)->nullable();
            $table->text('description_header')->nullable();
            $table->text('description')->nullable();

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
        Schema::dropIfExists('repair_services');
    }
}
