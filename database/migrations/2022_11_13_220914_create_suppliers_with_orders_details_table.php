<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersWithOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_with_orders_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suppliers_with_orders_auto_serial')->nullable();
            $table->tinyInteger('order_type')->nullable();
            $table->integer('com_code')->nullable();
            $table->decimal('deliverd_quantity', 10, 2)->nullable();
            $table->integer('uom_id')->nullable();
            $table->tinyInteger('isparentuom')->nullable();
            $table->decimal('unit_price', 10, 2)->nullable();
            $table->decimal('total_price', 10, 2)->nullable();
            $table->date('order_date')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->bigInteger('item_code')->nullable();
            $table->bigInteger('batch_auto_serial')->nullable();
            $table->date('production_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->tinyInteger('item_card_type')->nullable();
            $table->integer('approved_by')->nullable();
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
        Schema::dropIfExists('suppliers_with_orders_details');
    }
}
