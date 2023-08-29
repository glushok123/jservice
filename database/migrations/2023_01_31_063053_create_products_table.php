<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('name')->index();
            $table->boolean('active')->default(1);
            $table->string('slug')->unique()->index();
            $table->text('description')->nullable();
            $table->unsignedInteger('quantity');
            $table->bigInteger('purchase_price')->nullable()->comment('Цена покупки');
            $table->bigInteger('price')->nullable()->comment('Цена для продажи');
            $table->bigInteger('last_price')->nullable()->comment('Цена последней продажи');
            $table->decimal('mrg', 8, 2)->nullable()->comment('Маржа');

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('category_id')->references('id')->on('product_categories');

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
        Schema::dropIfExists('products');
    }
}
