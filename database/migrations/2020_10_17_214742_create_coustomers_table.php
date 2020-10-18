<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coustomers', function (Blueprint $table) {
            $table->id();
            $table->integer('salesRepEmployeeNum');
            $table->char('name');
            $table->integer('lastname');
            $table->char('firstname');
            $table->char('phone');
            $table->char('address1');
            $table->char('address2');
            $table->char('city');
            $table->char('stale');
            $table->char('country');
            $table->char('CreditLimit');
            $table->integer('PostalCode');


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
        Schema::dropIfExists('coustomers');
    }
}
