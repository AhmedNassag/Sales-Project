<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersWithOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers_with_orders', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('order_type')->nullable();
            $table->bigInteger('auto_serial')->nullable();
            $table->bigInteger('DOC_NO')->nullable();
            $table->date('order_date')->nullable();
            $table->bigInteger('suuplier_code')->nullable();
            $table->tinyInteger('is_approved')->nullable();
            $table->integer('com_code')->nullable();
            $table->string('notes')->nullable();
            $table->tinyInteger('discount_type')->nullable();
            $table->decimal('discount_percent', 10, 2)->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->decimal('tax_percent', 10, 2)->nullable();
            $table->decimal('tax_value', 10, 2)->nullable();
            $table->decimal('total_befor_discount', 10, 2)->nullable();
            $table->decimal('total_cost', 10, 2)->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('money_for_account', 10, 2)->nullable();
            $table->tinyInteger('pill_type')->nullable();
            $table->decimal('what_paid', 10, 2)->nullable();
            $table->decimal('what_remain', 10, 2)->nullable();
            $table->bigInteger('treasuries_transactions_id')->nullable();
            $table->decimal('Supplier_balance_befor', 10, 2)->nullable();
            $table->decimal('Supplier_balance_after', 10, 2)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->decimal('total_cost_items', 10, 2)->nullable();
            $table->integer('store_id')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('suppliers_with_orders');
    }
}
