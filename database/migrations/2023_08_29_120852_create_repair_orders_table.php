<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name_form', 255)->nullable()->index();
            $table->string('name', 255)->nullable()->index();
            $table->string('phone', 255)->index();
            $table->string('category', 255)->nullable()->index();
            $table->string('sub_category', 255)->nullable()->index();
            $table->string('brand', 255)->nullable()->index();
            $table->string('service', 255)->nullable()->index();
            $table->string('status', 255)->default('Активна')->index();
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
        Schema::dropIfExists('repair_orders');
    }
}
