<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_service', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('billing_id')->unsigned();
            $table->integer('service_id')->unsigned();

            $table->timestamps();
            $table->softDeletes();

            $table->unique(['billing_id', 'service_id']);
            $table->foreign('billing_id')->references('id')->on('billings')
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
        Schema::dropIfExists('billing_service');
    }
}
