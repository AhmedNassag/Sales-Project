<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('customer_code')->nullable();
            $table->foreignId('city_id')->nullable()/*->constrained('cities')->cascadeOnDelete()*/;
            $table->string('address')->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('start_balance', 10, 2)->default(0)->nullable();
            $table->tinyInteger('start_balance_status')->default(0)->nullable();
            $table->decimal('current_balance', 10, 2)->default(0)->nullable();
            $table->text('notes')->nullable();
            // $table->tinyInteger('is_archived')->default(0)->nullable();
            $table->tinyInteger('active')->default(1)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->date('date');
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
        Schema::dropIfExists('customers');
    }
}
