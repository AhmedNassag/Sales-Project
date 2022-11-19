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
            $table->foreignId('inv_itemcard_categories_id')->nullable()->constrained('inv_item_card_categories')->cascadeOnDelete();
            $table->foreignId('parent_inv_itemcard_id')->nullable()->constrained('inv_item_card_categories')->cascadeOnDelete();
            $table->tinyInteger('does_has_retailunit')->default(1)->nullable();
            $table->foreignId('uom_id')->nullable()->constrained('inv_uoms')->cascadeOnDelete();
            $table->foreignId('retail_uom_id')->nullable()->constrained('inv_uoms')->cascadeOnDelete();
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
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('inv_item_cards');
    }
}
