<?php

namespace Database\Seeders;

use App\Models\Inv_itemcard_movements_categories;
use Illuminate\Database\Seeder;

class InvItemcardMovementsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inv_itemcard_movements_categories1 = Inv_itemcard_movements_categories::create([
            'name' => 'حركة على المشتريات',
        ]);


        $inv_itemcard_movements_categories2 = Inv_itemcard_movements_categories::create([
            'name' => 'حركة على المبيعات',
        ]);


        $inv_itemcard_movements_categories3 = Inv_itemcard_movements_categories::create([
            'name' => 'حركة على المخازن',
        ]);
    }
}
