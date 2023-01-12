<?php

namespace Database\Seeders;

use App\Models\Mov_type;
use Illuminate\Database\Seeder;

class MovTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mov_type1 = Mov_type::create([
            'id'                  => 1,
            'name'                => 'مراجعة واستلام نقدية شفت علي نفس الخزنة',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type2 = Mov_type::create([
            'id'                  => 2,
            'name'                => 'مراجعة واستلام نقدية شفت خزنة اخري',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type3 = Mov_type::create([
            'id'                  => 3,
            'name'                => 'صرف مبلغ لحساب مالي',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type4 = Mov_type::create([
            'id'                  => 4,
            'name'                => 'تحصيل مبلغ من حساب مالي',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type5 = Mov_type::create([
            'id'                  => 5,
            'name'                => 'تحصيل ايراد مبيعات',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type6 = Mov_type::create([
            'id'                  => 6,
            'name'                => 'صرف نظير مرتجع مبيعات',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type8 = Mov_type::create([
            'id'                  => 8,
            'name'                => 'صرف سلفة علي راتب موظف',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 1
        ]);

        $mov_type9 = Mov_type::create([
            'id'                  => 9,
            'name'                => 'صرف نظير مشتريات من مورد',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type10 = Mov_type::create([
            'id'                  => 10,
            'name'                => 'تحصيل نظير مرتجع مشتريات الي مورد',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type16 = Mov_type::create([
            'id'                  => 16,
            'name'                => 'ايراد زيادة راس المال',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type17 = Mov_type::create([
            'id'                  => 17,
            'name'                => 'مصاريف شراء مثل النولون',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type18 = Mov_type::create([
            'id'                  => 18,
            'name'                => 'صرف للإيداع البنكي',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type21 = Mov_type::create([
            'id'                  => 21,
            'name'                => 'رد سلفة علي راتب موظف',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type22 = Mov_type::create([
            'id'                  => 22,
            'name'                => 'تحصيل خصومات موظفين',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type24 = Mov_type::create([
            'id'                  => 24,
            'name'                => 'صرف مرتب لموظف',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 1
        ]);

        $mov_type25 = Mov_type::create([
            'id'                  => 25,
            'name'                => 'سحب من البنك',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type26 = Mov_type::create([
            'id'                  => 26,
            'name'                => 'صرف لرد رأس المال',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type27 = Mov_type::create([
            'id'                  => 27,
            'name'                => 'صرف نظير خدمات مقدمة لنا',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type28 = Mov_type::create([
            'id'                  => 28,
            'name'                => 'صرف نظير خدمات نقدمها للغير',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

    }
}
