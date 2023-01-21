<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvStoresInventoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_stores_inventory_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('inv_stores_inventory_auto_serial')->nullable();
            $table->bigInteger('item_code')->nullable();
            $table->integer('inv_uoms_id')->nullable();
            $table->bigInteger('batch_auto_serial')->nullable();
            $table->decimal('old_quantity', 10, 2)->nullable();
            $table->decimal('new_quantity', 10, 2)->nullable();
            $table->decimal('diffrent_quantity', 10, 2)->default(0)->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('is_closed')->default(0)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('cloased_by')->nullable();
            $table->date('closed_at')->nullable();
            $table->integer('com_code')->nullable();
            $table->decimal('unit_cost_price', 10, 2)->nullable();
            $table->decimal('total_cost_price', 10, 2)->nullable();
            $table->date('production_date')->nullable();
            $table->date('expired_date')->nullable();
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
        Schema::dropIfExists('inv_stores_inventory_details');
    }
}
