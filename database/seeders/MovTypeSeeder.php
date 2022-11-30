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
            'name'                => 'مراجعة واستلام نقدية شفت علي نفس الخزنة',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type2 = Mov_type::create([
            'name'                => 'مراجعة واستلام نقدية شفت خزنة اخري',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type3 = Mov_type::create([
            'name'                => 'صرف مبلغ لحساب مالي',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type4 = Mov_type::create([
            'name'                => 'تحصيل مبلغ من حساب مالي',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type5 = Mov_type::create([
            'name'                => 'تحصيل ايراد مبيعات',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type6 = Mov_type::create([
            'name'                => 'صرف نظير مرتجع مبيعات',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type7 = Mov_type::create([
            'name'                => 'صرف سلفة علي راتب موظف',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 1
        ]);

        $mov_type8 = Mov_type::create([
            'name'                => 'صرف نظير مشتريات من مورد',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type9 = Mov_type::create([
            'name'                => 'تحصيل نظير مرتجع مشتريات الي مورد',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type10 = Mov_type::create([
            'name'                => 'ايراد زيادة راس المال',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type11 = Mov_type::create([
            'name'                => 'مصاريف شراء مثل النولون',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type12 = Mov_type::create([
            'name'                => 'صرف للإيداع البنكي',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        $mov_type13 = Mov_type::create([
            'name'                => 'رد سلفة علي راتب موظف',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type14 = Mov_type::create([
            'name'                => 'تحصيل خصومات موظفين',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 1
        ]);

        $mov_type15 = Mov_type::create([
            'name'                => 'صرف مرتب لموظف',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 1
        ]);

        $mov_type16 = Mov_type::create([
            'name'                => 'سحب من البنك',
            'active'              => 1,
            'in_screen'           => 2,
            'is_private_internal' => 0
        ]);

        $mov_type17 = Mov_type::create([
            'name'                => 'صرف لرد رأس المال',
            'active'              => 1,
            'in_screen'           => 1,
            'is_private_internal' => 0
        ]);

        // $mov_type18 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 2,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type19 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 2,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type20 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 1,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type21 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 1,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type22 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 2,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type23 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 2,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type24 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 1,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type25 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 2,
        //     'is_private_internal' => 0
        // ]);

        // $mov_type26 = Mov_type::create([
        //     'name'                => 'عام',
        //     'active'              => 1,
        //     'in_screen'           => 1,
        //     'is_private_internal' => 0
        // ]);

    }
}
