<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvProductionOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_production_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('auto_serial')->nullable();
            $table->text('production_plane')->nullable();
            $table->tinyInteger('is_approved')->default(0)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->integer('approved_by')->nullable();
            $table->date('approved_at')->nullable();
            $table->tinyInteger('is_closed')->default(0)->nullable();
            $table->integer('closed_by')->nullable();
            $table->date('closed_at')->nullable();
            $table->date('date')->nullable();
            $table->date('production_plan_date')->nullable();
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
        Schema::dropIfExists('inv_production_orders');
    }
}
