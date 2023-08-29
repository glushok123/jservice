<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->unique()->index();
            $table->string('title', 255)->index();
            $table->string('slug', 255)->unique();

            $table->string('image', 255)->nullable();
            $table->string('min_price', 255)->nullable();
            $table->string('min_time', 255)->nullable();
            $table->text('description')->nullable();

            $table->string('seo_title', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();

            $table->boolean('active')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_categories');
    }
}
