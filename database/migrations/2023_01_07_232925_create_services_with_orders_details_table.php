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
            $table->bigInteger('services_with_orders_auto_serial')->nullable();
            $table->integer('service_id')->nullable();
            $table->text('notes')->nullable();
            $table->decimal('total', 10, 2)->default(0)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->date('date')->nullable();
            $table->tinyInteger('order_type')->nullable();
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
