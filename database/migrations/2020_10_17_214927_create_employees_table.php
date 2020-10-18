<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('officecode');
            $table->integer('reportsto');
            $table->char('lastname');
            $table->char('firdtname');
            $table->char('extension');
            $table->char('email');
            $table->char('jobtitle');

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
        Schema::dropIfExists('employees');
    }
}
