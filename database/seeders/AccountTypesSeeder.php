<?php

namespace Database\Seeders;

use App\Models\Account_types;
use Illuminate\Database\Seeder;

class AccountTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account_types1 = Account_types::create([
            'name'                   => 'رأس مال',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);

        $account_types2 = Account_types::create([
            'name'                   => 'مورد',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types3 = Account_types::create([
            'name'                   => 'عميل',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types4 = Account_types::create([
            'name'                   => 'مندوب',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types5 = Account_types::create([
            'name'                   => 'خط إنتاج',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types6 = Account_types::create([
            'name'                   => 'بنكى',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);

        $account_types7 = Account_types::create([
            'name'                   => 'مصروفات',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);

        $account_types8 = Account_types::create([
            'name'                   => 'قسم داخلى',
            'relatediternalaccounts' => 1,
            'active'                 => 1,
        ]);

        $account_types9 = Account_types::create([
            'name'                   => 'عام',
            'relatediternalaccounts' => 0,
            'active'                 => 1,
        ]);
    }
}
