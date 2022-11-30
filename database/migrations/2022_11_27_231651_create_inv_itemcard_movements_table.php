<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvItemcardMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_itemcard_movements', function (Blueprint $table) {
            $table->id();
            $table->integer('inv_itemcard_movements_categories')->nullable();
            $table->tinyInteger('item_code')->nullable();
            $table->integer('items_movements_types')->nullable();
            $table->bigInteger('FK_table')->nullable();
            $table->bigInteger('FK_table_details')->nullable();
            $table->string('byan')->nullable();
            $table->string('quantity_befor_movement')->nullable();
            $table->string('quantity_after_move')->nullable();
            $table->integer('added_by')->nullable();
            $table->date('date')->nullable();
            $table->integer('com_code')->nullable();
            $table->integer('store_id')->nullable();
            $table->string('quantity_befor_move_store')->nullable();
            $table->string('quantity_after_move_store')->nullable();
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
        Schema::dropIfExists('inv_itemcard_movements');
    }
}
