<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->decimal('amount',10);
            $table->decimal('price_cost',8,2);
            $table->decimal('price_resale',8,2);
            $table->integer('providers_id')->unsigned();
            $table->integer('brands_id')->unsigned();
            $table->integer('categories_id')->unsigned();

            $table->foreign('providers_id')->references('id')->on('providers');
            $table->foreign('brands_id')->references('id')->on('brands');
            $table->foreign('categories_id')->references('id')->on('categories');
            /* POR ENQUANTO NAO VAMOS USAR             $table->timestamps();             */
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
