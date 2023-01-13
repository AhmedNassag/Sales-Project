<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreasuriesTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treasuries_transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('treasuries_id')->nullable();
            $table->decimal('money', 10, 2)->nullable();
            $table->integer('mov_type')->nullable();
            $table->bigInteger('the_foregin_key')->nullable();
            $table->date('date')->nullable();
            // $table->id('last_update')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            // $table->id('ac_yearly_trn_ENTRY_NO')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->tinyInteger('is_account')->nullable();
            // $table->id('CLOSE_FLAG')->nullable();
            // $table->id('closed_by')->nullable();
            $table->string('byan')->nullable();
            // $table->id('users_shiftes_id')->nullable();
            $table->decimal('money_for_account', 10, 2)->nullable();
            // $table->id('the_date_time')->nullable();
            // $table->id('treasuries_idReview')->nullable();
            $table->bigInteger('userShiftReview')->nullable();
            // $table->id('delegates_code')->nullable();
            // $table->id('sales_material_type')->nullable();
            // $table->id('delegate_commission')->nullable();
            // $table->id('delegate_commission_value')->nullable();
            // $table->id('account_balance_after')->nullable();
            // $table->id('move_section')->nullable();
            $table->date('move_date')->nullable();
            $table->bigInteger('shift_code')->nullable();
            $table->bigInteger('isal_number')->nullable();
            $table->tinyInteger('is_approved')->nullable();
            $table->bigInteger('auto_serial')->nullable();
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
        Schema::dropIfExists('treasuries_transactions');
    }
}
