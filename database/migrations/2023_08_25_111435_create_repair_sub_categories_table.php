<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->index();
            $table->string('title', 255)->index();
            $table->string('slug', 255)->unique();

            $table->string('image', 255)->nullable();
            $table->string('small_image', 255)->nullable();
            $table->string('min_price', 255)->nullable();
            $table->string('min_time', 255)->nullable();
            $table->text('description')->nullable();

            $table->text('template_description_brand')->nullable();

            $table->string('seo_title', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

            $table->boolean('active')->default(1);
            $table->bigInteger('parent_id')->unsigned()->index();

            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('repair_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_sub_categories');
    }
}
