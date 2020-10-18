<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('CustomerID');
            $table->dateTime('Orderdata');
            $table->dateTime('requireddata');
            $table->dateTime('shippeddata');
            $table->integer('status');
            $table->char('Comments');

            $table->bigInteger('coustomer_id')->unsigned();
            $table->foreign('coustomer_id')->references('id')->on('coustomers')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
