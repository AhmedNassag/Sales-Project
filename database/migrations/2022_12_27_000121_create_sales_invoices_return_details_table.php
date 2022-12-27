<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoicesReturnDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices_return_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sales_invoices_auto_serial')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('com_code')->nullable();
            $table->decimal('quantity', 10, 2)->default(0)->nullable();
            $table->integer('uom_id')->nullable();
            $table->tinyInteger('isparentuom')->nullable();
            $table->decimal('unit_price', 10, 2)->default(0)->nullable();
            $table->decimal('total_price', 10, 2)->default(0)->nullable();
            $table->date('invoice_date')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->bigInteger('item_code')->nullable();
            $table->tinyInteger('sales_item_type')->nullable();
            $table->integer('batch_auto_serial')->nullable();
            $table->date('production_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->tinyInteger('item_card_type')->nullable();
            $table->tinyInteger('is_normal_orOther')->nullable();
            $table->date('date')->nullable();
            $table->decimal('unit_cost_price', 10, 2)->default(0)->nullable();
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
        Schema::dropIfExists('sales_invoices_return_details');
    }
}
