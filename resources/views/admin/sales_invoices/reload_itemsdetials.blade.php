@if (@isset($details) && !@empty($details) && count($details) > 0)
    @php
        $i = 1;
    @endphp
    <table id="example2" class="table table-bordered table-hover">
        <thead class="custom_thead">
            <th class="text-center">مسلسل</th>
            <th class="text-center">الصنف </th>
            <th class="text-center">الوحده</th>
            <th class="text-center">الكمية</th>
            <th class="text-center">السعر</th>
            <th class="text-center">الاجمالي</th>
            <th class="text-center">الإجراءات</th>
        </thead>
        <tbody>
            @foreach ($details as $info)
                <tr>
                    <td class="text-center">{{ $i }}</td>
                    <td class="text-center">{{ $info->item_card_name }}
                        @if ($info->item_card_type == 2)
                            <br>
                            تاريخ انتاج {{ $info->production_date }} <br>
                            تاريخ انتهاء {{ $info->expire_date }} <br>
                        @endif
                    </td>
                    <td class="text-center">{{ $info->uom_name }}</td>
                    <td class="text-center">{{ $info->deliverd_quantity * 1 }}</td>
                    <td class="text-center">{{ $info->unit_price * 1 }}</td>
                    <td class="text-center">{{ $info->total_price * 1 }}</td>
                    <td class="text-center">
                        @if ($data['is_approved'] == 0)
                            <button data-id="{{ $info->id }}" class="btn btn-sm load_edit_item_details  btn-primary">تعديل</button>
                            <a href="#" class="btn btn-sm are_you_shue  btn-danger">حذف</a>
                        @endif
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
@else
    <div class="alert alert-danger">
        عفوا لاتوجد بيانات لعرضها !!
    </div>
@endif
