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
            $table->integer('category_id');
            $table->string('product_name',150);
            $table->string('product_origin',150);
            $table->text('product_description');
            $table->decimal('product_price',18,9);
            $table->integer('product_stock');
            $table->integer('product_minallowedstock');
            $table->integer('product_quantity');
            $table->integer('product_expirationdate');
            $table->timestamps();

            

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
