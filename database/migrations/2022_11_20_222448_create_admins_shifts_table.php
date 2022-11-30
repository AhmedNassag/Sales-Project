<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins_shifts', function (Blueprint $table) {
            $table->id();
            $table->integer('admin_id')->nullable();
            $table->integer('treasuries_id')->nullable();
            $table->decimal('treasuries_balnce_in_shift_start', 10, 2)->default(0)->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->tinyInteger('is_finished')->default(0)->nullable();
            $table->tinyInteger('is_delivered_and_review')->default(0)->nullable();
            $table->integer('delivered_to_admin_id')->nullable();
            $table->integer('delivered_to_treasuries_id')->nullable();
            $table->bigInteger('delivered_to_admin_sift_id')->nullable();
            $table->decimal('money_should_deviled', 10, 2)->nullable();
            $table->decimal('what_realy_delivered', 10, 2)->nullable();
            $table->tinyInteger('money_state')->nullable();
            $table->decimal('money_state_value', 10, 2)->default(0)->nullable();
            $table->tinyInteger('receive_type')->nullable();
            $table->dateTime('review_receive_date')->nullable();
            $table->bigInteger('treasuries_transactions_id')->nullable();
            $table->string('notes')->nullable();
            $table->integer('com_code')->nullable();
            $table->integer('shift_code')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('admins__shifts');
    }
}
