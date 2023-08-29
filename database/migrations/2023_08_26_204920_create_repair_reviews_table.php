<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_name', 255)->index();
            $table->string('name_image', 255)->index();
            $table->text('comment')->nullable();
            $table->string('date', 255)->nullable();
            $table->bigInteger('sub_category_id')->nullable()->unsigned()->index();
            $table->bigInteger('category_id')->nullable()->unsigned()->index();

            $table->timestamps();

            $table->foreign('sub_category_id')->references('id')->on('repair_sub_categories');
            $table->foreign('category_id')->references('id')->on('repair_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('repair_reviews');
    }
}
