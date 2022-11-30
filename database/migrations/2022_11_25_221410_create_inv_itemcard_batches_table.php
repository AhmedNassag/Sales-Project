<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvItemcardBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_itemcard_batches', function (Blueprint $table) {
            $table->id();
            $table->integer('store_id')->nullable();
            $table->integer('item_code')->nullable();
            $table->integer('inv_uoms_id')->nullable();
            $table->decimal('unit_cost_price', 10, 2)->nullable();
            $table->decimal('quantity', 10, 2)->nullable();
            $table->decimal('total_cost_price', 10, 2)->nullable();
            $table->date('production_date')->nullable();
            $table->date('expired_date')->nullable();
            $table->integer('com_code')->nullable();
            $table->bigInteger('auto_serial')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->tinyInteger('is_send_to_archived')->default(0)->nullable();
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
        Schema::dropIfExists('inv_itemcard_batches');
    }
}
