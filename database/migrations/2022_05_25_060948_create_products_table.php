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
            $table->string('title', 50);
            $table->string('desc', 100);
            $table->bigInteger('categoryId');
            $table->bigInteger('price');
            $table->bigInteger('sale_price');
            $table->boolean('is_active')->default(1);
            $table->string('image_1', 250)->nullable();
            $table->string('image_2', 250)->nullable();
            $table->string('image_3', 250)->nullable();
            $table->string('image_4', 250)->nullable();
            $table->string('image_5', 250)->nullable();
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
