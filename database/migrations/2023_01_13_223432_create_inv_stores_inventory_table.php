<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvStoresInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_stores_inventory', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('auto_serial')->nullable();
            $table->date('inventory_date')->nullable();
            $table->tinyInteger('is_closed')->default(0)->nullable();
            $table->decimal('total_cost_batches', 10, 2)->default(0)->nullable();
            $table->text('notes')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->tinyInteger('inventory_type')->nullable();
            $table->integer('store_id')->nullable();
            $table->date('date')->nullable();
            $table->integer('cloased_by')->nullable();
            $table->date('closed_at')->nullable();
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
        Schema::dropIfExists('inv_stores_inventory');
    }
}
