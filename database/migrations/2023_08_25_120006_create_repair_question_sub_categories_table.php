<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairQuestionSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_question_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question', 255)->index();
            $table->text('answer')->index();
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
        Schema::dropIfExists('repair_question_sub_categories');
    }
}
