<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoicesReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices_return', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_matrial_types')->nullable();
            $table->integer('auto_serial')->nullable();
            $table->integer('return_type')->nullable();
            $table->date('invoice_date')->nullable();
            $table->integer('customer_code')->nullable();
            $table->tinyInteger('is_approved')->default(1)->nullable();
            $table->integer('com_code')->nullable();
            $table->text('notes')->nullable();
            $table->integer('discount_type')->nullable();
            $table->decimal('discount_percent', 10, 2)->nullable();
            $table->decimal('discount_value', 10, 2)->nullable();
            $table->decimal('tax_percent', 10, 2)->nullable();
            $table->integer('total_cost_items')->nullable();
            $table->decimal('tax_value', 10, 2)->nullable();
            $table->decimal('total_befor_discount', 10, 2)->nullable();
            $table->decimal('total_cost', 10, 2)->nullable();
            $table->integer('account_number')->nullable();
            $table->decimal('money_for_account', 10, 2)->nullable();
            $table->integer('pill_type')->nullable();
            $table->decimal('what_paid', 10, 2)->nullable();
            $table->decimal('what_remain', 10, 2)->nullable();
            $table->integer('treasuries_transactions_id')->nullable();
            $table->decimal('customer_balance_befor', 10, 2)->nullable();
            $table->decimal('customer_balance_after', 10, 2)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->tinyInteger('is_has_customer')->default(1)->nullable();
            $table->integer('delegate_code')->nullable();
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
        Schema::dropIfExists('sales_invoices_return');
    }
}
