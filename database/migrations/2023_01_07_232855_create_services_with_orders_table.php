<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesWithOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_with_orders', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('order_type')->nullable();
            $table->bigInteger('auto_serial')->nullable();
            $table->date('order_date')->nullable();
            $table->tinyInteger('is_approved')->default(0)->nullable();
            $table->integer('com_code')->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('discount_type')->nullable();
            $table->decimal('discount_percent', 10, 2)->default(0)->nullable();
            $table->decimal('discount_value', 10, 2)->default(0)->nullable();
            $table->decimal('tax_percent', 10, 2)->default(0)->nullable();
            $table->decimal('tax_value', 10, 2)->default(0)->nullable();
            $table->decimal('total_befor_discount', 10, 2)->default(0)->nullable();
            $table->decimal('total_cost', 10, 2)->default(0)->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('money_for_account', 10, 2)->nullable();
            $table->tinyInteger('pill_type')->nullable();
            $table->decimal('what_paid', 10, 2)->default(0)->nullable();
            $table->decimal('what_remain', 10, 2)->default(0)->nullable();
            $table->bigInteger('treasuries_transactions_id')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('approved_by')->nullable();
            $table->tinyInteger('is_account_number')->nullable();
            $table->string('entity_name')->nullable();
            $table->decimal('total_services', 10, 2)->default(0)->nullable();
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
        Schema::dropIfExists('services_with_orders');
    }
}
