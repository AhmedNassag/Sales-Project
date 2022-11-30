<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvItemCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_item_cards', function (Blueprint $table) {
            $table->id();
            $table->integer('item_code')->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('item_type')->default(1)->nullable();
            $table->integer('inv_itemcard_categories_id')->nullable();
            $table->integer('parent_inv_itemcard_id')->nullable();
            $table->tinyInteger('does_has_retailunit')->default(1)->nullable();
            $table->integer('uom_id')->nullable();
            $table->integer('retail_uom_id')->nullable();
            $table->decimal('retail_uom_qunToParent', 10, 2)->default(1)->nullable();
            $table->tinyInteger('active')->default(1)->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('com_code')->nullable();
            $table->string('barcode')->nullable();
            $table->date('date');
            $table->decimal('price', 10, 2)->default(0)->nullable();
            $table->decimal('nos_gomla_price', 10, 2)->default(0)->nullable();
            $table->decimal('gomla_price', 10, 2)->default(0)->nullable();
            $table->decimal('price_retail', 10, 2)->default(0)->nullable();
            $table->decimal('nos_gomla_price_retail', 10, 2)->default(0)->nullable();
            $table->decimal('gomla_price_retail', 10, 2)->default(0)->nullable();
            $table->decimal('cost_price', 10, 2)->default(0)->nullable();
            $table->decimal('cost_price_retail', 10, 2)->default(0)->nullable();
            $table->tinyInteger('has_fixced_price')->default(1)->nullable();
            $table->decimal('QUENTITY', 10, 3)->default(0)->nullable();
            $table->decimal('QUENTITY_Retail', 10, 3)->default(0)->nullable();
            $table->decimal('QUENTITY_all_Retails', 10, 3)->default(0)->nullable();
            $table->decimal('All_QUENTITY', 10, 3)->default(0)->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            /*'retail_uom'
            'retail_uom_quntToParent'
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_item_cards');
    }
}
