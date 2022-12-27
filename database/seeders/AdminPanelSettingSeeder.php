<?php

namespace Database\Seeders;

use App\Models\Admin_panel_setting;
use Illuminate\Database\Seeder;

class AdminPanelSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPanelSetting = Admin_panel_setting::create
        ([
            'system_name' => 'Al_Nassag Developement',
            'photo'       => '1.jpg',
            'active'      => 1,
            'address'     => 'Helwan,Cairo,Egypt',
            'phone'       => '01016856433',
            'added_by'    => 1,
            'com_code'    => 1,
        ]);
    }
}
