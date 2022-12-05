@if (@isset($data) && !@empty($data))
    <table id="example2" class="table table-bordered table-hover">
        <tr>
            <td class="text-center width30"> كود الفاتورة الالي </td>
            <td class="text-center"> {{ $data['auto_serial'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> كود الفاتورة بأصل فاتورة المشتريات </td>
            <td class="text-center"> {{ $data['DOC_NO'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> تاريخ الفاتورة </td>
            <td class="text-center"> {{ $data['order_date'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> اسم المورد </td>
            <td class="text-center"> {{ $data['supplier_name'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> نوع الفاتورة</td>
            <td class="text-center">
                @if ($data['pill_type'] == 1)
                    كاش
                @else
                    اجل
                @endif
            </td>
        </tr>
        <tr>
            <td class="text-center width30"> المخزن المستلم للفاتورة </td>
            <td class="text-center"> {{ $data['store_name'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> اسم المورد </td>
            <td class="text-center"> {{ $data['supplier_name'] }} </td>
        </tr>
        <tr>
            <td class="text-center width30"> اجمالي الفاتورة </td>
            <td class="text-center"> {{ $data['total_befor_discount'] * 1 }} </td>
        </tr>
        @if ($data['discount_type'] != null)
            <tr>
                <td class="text-center width30"> الخصم علي الفاتورة </td>
                <td class="text-center">
                    @if ($data['discount_type'] == 1)
                        خصم نسبة ( {{ $data['discount_percent'] * 1 }} ) وقيمتها ( {{ $data['discount_value'] * 1 }} )
                    @else
                        خصم يدوي وقيمته( {{ $data['discount_value'] * 1 }} )
                    @endif
                </td>
            </tr>
        @else
            <tr>
                <td class="text-center width30"> الخصم علي الفاتورة </td>
                <td class="text-center">لايوجد</td>
            </tr>
        @endif
        <tr>
            <td class="text-center width30"> نسبة القيمة المضافة </td>
            <td class="text-center">
                @if ($data['tax_percent'] > 0)
                    لايوجد
                @else
                    بنسبة ({{ $data['tax_percent'] * 1 }}) % وقيمتها ( {{ $data['tax_value'] * 1 }} )
                @endif
            </td>
        </tr>
        <tr>
            <td class="text-center width30"> حالة الفاتورة </td>
            <td class="text-center">
                @if ($data['is_approved'] == 1)
                    مغلق ومؤرشف
                @else
                    مفتوحة
                @endif
            </td>
        </tr>
        <tr>
            <td class="text-center width30"> تاريخ الاضافة</td>
            <td class="text-center">
                @php
                    $dt = new DateTime($data['created_at']);
                    $date = $dt->format('Y-m-d');
                    $time = $dt->format('h:i');
                    $newDateTime = date('A', strtotime($time));
                    $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                @endphp
                {{ $date }}
                {{ $time }}
                {{ $newDateTimeType }}
                بواسطة
                {{ $data['added_by_admin'] }}
            </td>
        </tr>
        <tr>
            <td class="text-center width30"> تاريخ اخر تحديث</td>
            <td class="text-center">
                @if ($data['updated_by'] > 0 and $data['updated_by'] != null)
                    @php
                        $dt = new DateTime($data['updated_at']);
                        $date = $dt->format('Y-m-d');
                        $time = $dt->format('h:i');
                        $newDateTime = date('A', strtotime($time));
                        $newDateTimeType = $newDateTime == 'AM' ? 'صباحا ' : 'مساء';
                    @endphp
                    {{ $date }}
                    {{ $time }}
                    {{ $newDateTimeType }}
                    بواسطة
                    {{ $data['updated_by_admin'] }}
                @else
                    لايوجد تحديث
                @endif
                @if ($data['is_approved'] == 0)
                    <a href="{{ route('admin.suppliers_orders.delete', $data['id']) }}" class="btn btn-sm are_you_shue  btn-danger">حذف</a>
                    <a href="{{ route('admin.suppliers_orders.edit', $data['id']) }}" class="btn btn-sm btn-success">تعديل</a>
                    <button id="load_close_approve_invoice" class="btn btn-sm btn-primary">تحميل الاعتماد والترحيل</button>
                @endif
            </td>
        </tr>
    </table>
@else
    <div class="alert alert-danger">
        عفوا لاتوجد بيانات لعرضها !!
    </div>
@endif
