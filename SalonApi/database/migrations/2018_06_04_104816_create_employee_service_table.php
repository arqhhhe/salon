<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employee_id')->unsigned();
            $table->integer('service_id')->unsigned();


            $table->timestamps();
            $table->softDeletes();

            $table->unique(['employee_id', 'service_id']);
            $table->foreign('employee_id')->references('id')->on('employees')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('id')->on('services')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_service');
    }
}
