<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreasuriesDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treasuries_deliveries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('auto_serial')->nullable();
            $table->bigInteger('isal_number')->nullable();
            $table->bigInteger('shift_code')->nullable();
            $table->decimal('money', 10, 2)->nullable();
            $table->integer('treasuries_id')->nullable();
            $table->tinyInteger('is_approved')->nullable();
            $table->integer('mov_type')->nullable();
            $table->date('move_date')->nullable();
            $table->bigInteger('the_foregin_key')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->tinyInteger('is_account')->nullable();
            $table->decimal('money_for_account', 10, 2)->default(0)->nullable();
            $table->string('byan')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->integer('userShiftReview')->nullable();
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
        Schema::dropIfExists('treasuries_deliveries');
    }
}
