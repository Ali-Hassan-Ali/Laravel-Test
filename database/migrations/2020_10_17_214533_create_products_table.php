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
            $table->id();
            $table->integer('code');
            $table->integer('productlineID');
            $table->char('name');
            $table->integer('scale');
            $table->char('vendor');
            $table->char('pdtDescription');
            $table->integer('qtylnstock');
            $table->integer('Buyprice');
            $table->char('msrp');

            $table->bigInteger('productlines_id')->unsigned();
            $table->foreign('productlines_id')->references('id')->on('productlines')->onDelete('cascade');
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
