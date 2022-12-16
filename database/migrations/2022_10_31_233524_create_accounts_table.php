<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('account_type');
            $table->bigInteger('parent_account_number')->default(0)->nullable();
            $table->bigInteger('account_number')->nullable();
            $table->decimal('start_balance', 10, 2)->default(0)->nullable();
            $table->tinyInteger('start_balance_status')->default(0)->nullable();
            $table->decimal('current_balance', 10, 2)->default(0)->nullable();
            $table->bigInteger('other_table_FK')->default(0)->nullable();
            $table->text('notes')->nullable();
            $table->tinyInteger('is_parent')->default(0)->nullable();
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
        Schema::dropIfExists('accounts');
    }
}
