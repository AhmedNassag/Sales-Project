<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminPanelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_panel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('system_name')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('active')->default(1)->nullable();
            $table->string('general_alert')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->bigInteger('customer_parent_account_number')->nullable();
            $table->bigInteger('suppliers_parent_account_number')->nullable();
            $table->bigInteger('delegate_parent_account_number')->nullable();
            $table->bigInteger('employees_parent_account_number')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
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
        Schema::dropIfExists('admin_panel_settings');
    }
}
