<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymants', function (Blueprint $table) {
            $table->id();
            $table->char('chechknum');
            $table->dateTime('paymantsdata');
            $table->string('amount');

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
        Schema::dropIfExists('paymants');
    }
}
