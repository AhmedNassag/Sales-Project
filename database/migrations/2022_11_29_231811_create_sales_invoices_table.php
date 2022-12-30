<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_matrial_types')->nullable();
            $table->bigInteger('auto_serial')->nullable();
            $table->date('invoice_date')->nullable();
            $table->bigInteger('customer_code')->nullable();
            $table->tinyInteger('is_approved')->nullable();
            $table->integer('com_code')->nullable();
            $table->string('notes')->nullable();
            $table->tinyInteger('discount_type')->nullable();
            $table->decimal('discount_percent', 10, 2)->default(0)->nullable();
            $table->decimal('discount_value', 10, 2)->default(0)->nullable();
            $table->decimal('tax_percent', 10, 2)->default(0)->nullable();
            $table->decimal('total_cost_items', 10, 2)->default(0)->nullable();
            $table->decimal('tax_value', 10, 2)->default(0)->nullable();
            $table->decimal('total_befor_discount', 10, 2)->default(0)->nullable();
            $table->decimal('total_cost', 10, 2)->default(0)->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('money_for_account', 10, 2)->default(0)->nullable();
            $table->tinyInteger('pill_type')->nullable();
            $table->decimal('what_paid', 10, 2)->default(0)->nullable();
            $table->decimal('what_remain', 10, 2)->default(0)->nullable();
            $table->bigInteger('treasuries_transactions_id')->nullable();
            $table->decimal('customer_balance_befor', 10, 2)->default(0)->nullable();
            $table->decimal('customer_balance_after', 10, 2)->default(0)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->tinyInteger('is_has_customer')->nullable();
            $table->date('date')->nullable();
            $table->bigInteger('delegate_code')->nullable();
            $table->tinyInteger('sales_item_type')->nullable();
            $table->decimal('delegate_commission_percent', 10, 2)->default(0)->nullable();
            $table->decimal('delegate_commission_value', 10, 2)->default(0)->nullable();
            $table->decimal('delegate_commission_percent_type', 10, 2)->default(0)->nullable();
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
        Schema::dropIfExists('sales_invoices');
    }
}
