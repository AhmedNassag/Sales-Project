<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesWithOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_with_orders_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('services_with_orders_auto_serial');
            $table->integer('service_id');
            $table->text('notes');
            $table->decimal('total', 10, 2)->default(0);
            $table->integer('added_by');
            $table->integer('updated_by');
            $table->integer('com_code');
            $table->date('date');
            $table->tinyInteger('order_type');
            $table->integer('total_services');
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
        Schema::dropIfExists('services_with_orders_details');
    }
}
