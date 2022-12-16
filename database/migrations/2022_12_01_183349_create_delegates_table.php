<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelegatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delegates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('delegate_code')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->tinyInteger('start_balance_status')->nullable();
            $table->decimal('start_balance', 10, 2)->nullable();
            $table->decimal('current_balance', 10, 2)->nullable();
            $table->text('notes')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->tinyInteger('active')->default(0)->nullable();
            $table->integer('com_code')->nullable();
            $table->date('date')->nullable();
            $table->string('phones')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('percent_type')->nullable();
            $table->decimal('percent_collect_commission', 10, 2)->nullable();
            $table->decimal('percent_salaes_commission_kataei', 10, 2)->nullable();
            $table->decimal('percent_salaes_commission_nosjomla', 10, 2)->nullable();
            $table->decimal('percent_salaes_commission_jomla', 10, 2)->nullable();
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
        Schema::dropIfExists('delegates');
    }
}
